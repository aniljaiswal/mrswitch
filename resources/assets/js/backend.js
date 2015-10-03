Vue.http.headers.common['X-CSRF-TOKEN'] = $('#token').attr('content');


//Profile Setup Form Vue Bindings
new Vue({
    el: '#mainSetupContent',

    data: {
        newProfile: {

            first_part: {
                first_name: '',

                last_name: '',

                mobile: '',

                address: '',
            },

            second_part : {

                gender: '',

                birthday: ''
            },

            third_part: {

                twitterUrl: '',

                facebookUrl: '',

                gplusUrl: ''
            }

        },

        otp: '',

        otp_status: false
    },

    computed:{
        first: function () {
            for (var key in this.newProfile.first_part){
                if (! this.newProfile.first_part[key]) return true;
            }

            if( ! this.otp_status ) return true;

            return false;
        },

        second: function () {
            for (var key in this.newProfile.second_part){
                if (! this.newProfile.second_part[key]) return true;
            }

            return false;
        },

        otpError: function () {

            if( this.otp && this.otp.toString().length == 6) return false;

            return true;
        }
    },

    ready: function () {

    },

    methods: {

        onGetOtp: function () {
            var mobile = this.newProfile.first_part.mobile;
            if( mobile && mobile.length == 10 && !isNaN(mobile))
            {
                $('.send-otp-btn').text('Sending...');
                this.$http.get('/profile/otp/'+mobile, function (otp) {

                    $('.send-otp-btn').removeClass('btn-danger').addClass('btn-success').text('OTP Sent');

                    $('#otpModal').modal({
                        keyboard: false, backdrop: false
                    });

                }).error(function (data, status, request) {

                    $('.send-otp-btn').removeClass('btn-success').addClass('btn-danger').text('Failed');

                });
            }
            else
            {
                alert('Please enter a 10 digit mobile number.');
            }
        },

        onSubmitVerifyOtp: function () {

            $('.send-otp-btn').removeClass('btn-danger btn-success').text('Resend');

            var payload = { 'otp': this.otp, 'mobile': this.newProfile.first_part.mobile };

            this.$http.post('/profile/otp', payload, function (data, status, request) {

                $('#otpModal').modal('hide');
                $('.send-otp-btn')
                    .removeClass('btn-danger')
                    .addClass('btn-success')
                    .text('Done');

                this.$set('otp_status', true);

            }).error(function (data, status, request) {

                $('.send-otp-btn').removeClass('btn-success').addClass('btn-danger').text('Failed');

            });

        }
    }
});


//Booking Form Vue Bindings
new Vue({

    el: '#mainProfileContent',

    data: {
        newBooking: {

            scheduled_at: '',

            service_id: '1',

            comments : ''
        },

        bookingStatus: {

            success: false,

            message: ''
        }
    },

    computed:{
        errors: function () {
            for (var key in this.newBooking){
                if (! this.newBooking[key]) return true;
            }

            return false;
        }
    },


    ready: function () {
        this.fetchServices();
        this.fetchBookings();
    },

    methods: {
        fetchServices: function () {
            this.$http.get('/api/v1/services', function (services) {
                $.each(services, function (index, item) {
                    $('#service-type').get(0).options[index] = new Option(item.service_label,item.id);
                });
            });
        },

        fetchBookings: function () {
            this.$http.get('/api/v1/bookings', function (bookings) {
                this.$set('bookings', bookings);
            });
        },

        onSubmitForm: function (e) {
            e.preventDefault();

            var payload = this.newBooking;

            this.storeBooking(payload);
        },

        onClickReset: function () {
            this.bookingStatus = {success : false, message: ''};
        },

        storeBooking: function (payload) {
            this.$http.post('/api/v1/bookings', payload, function (data, status, request){

                this.bookingStatus.success = true;
                this.bookingStatus.message = data.message;
                this.newBooking = { scheduled_at : '', service_id: '1', comments: ''};
                this.fetchBookings();

            }).error(function (data, status, request) {

                this.bookingStatus.success = false;
                this.bookingStatus.message = data.message;

            });
        }
    }

});
