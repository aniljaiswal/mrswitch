Vue.http.headers.common['X-CSRF-TOKEN'] = $('#token').attr('content');

new Vue({

    el: '#mainContent',

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
