@extends('profile.profile-layout')

@section('content')

@include('profile.partials.nav')

<section id="mainSetupContent">

    <div class="container">
        <div id="formbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <!-- multistep form -->
            {!!Form::open(['url'=>url('/profile/setup'), 'id' => 'msform', 'v-on' => 'submit: onSubmitForm'])!!}

                <div class="heading">
                    <h1>Let's get started.</h1>
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Contact Information</li>
                        <li>Personal Details</li>
                        <li>Social Profiles</li>
                    </ul>
                </div>

                <div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="mySmallModalLabel">Verify your Mobile</h4>
                            </div>
                            <div class="modal-body">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Enter OTP here" v-model="otp" number></div>
                            </div>
                            <div class="modal-footer">
                                <div class="btn btn-default send-otp-btn" v-on="click: onSendOtp">
                                    Resend
                                </div>

                                {!! Form::input('button', 'otp-confirm', 'Confirm', ['class' => "btn btn-primary", 'v-on' => "click: onSubmitVerifyOtp", 'v-attr' => "disabled: otpError"]) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Contact Information</h2>
                    <h3 class="fs-subtitle">We will never sell it</h3>

                    <div class="form-group">
                        {!! Form::input('text', 'first_name', null, ['placeholder' => 'First Name', 'id' => 'first_name', 'class' => 'form-control', 'v-model' => "newProfile.first_part.first_name"]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::input('text', 'last_name', null, ['placeholder' => 'Last Name', 'id' => 'last_name', 'class' => 'form-control', 'v-model' => "newProfile.first_part.last_name"]) !!}
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            {!! Form::input('tel', 'mobile', null, ['placeholder' => '10 Digit Mobile No.', 'id' => 'mobile', 'class' => 'form-control', 'v-model' => "newProfile.first_part.mobile"]) !!}
                            <div class="input-group-addon send-otp-btn" v-on="click: onGetOtp">Get OTP</div>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('address', null, ['placeholder' => 'Address', 'class' => "form-control", 'rows' => "3", 'cols' => "40", 'v-model' => "newProfile.first_part.address"]) !!}
                    </div>

                    {!! Form::input('button', 'next', 'Next', ['class' => "btn btn-wide btn-primary mrm next", 'v-on' => "click: onClickFirstName", 'v-attr' => "disabled: first"]) !!}

                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Personal Details</h2>
                    <h3 class="fs-subtitle">So we can serve you better</h3>
                    <label class="radio-inline">
                    {!! Form::input('radio', 'gender', 'male', ['id' => 'gender1', 'v-model' => 'newProfile.second_part.gender'])!!} Male
                    </label>
                    <label class="radio-inline">
                    {!! Form::input('radio', 'gender', 'female', ['id' => 'gender1', 'v-model' => 'newProfile.second_part.gender'])!!} Female
                    </label>

                    <div class="form-group">
                        {!! Form::input('text', 'birthday', null, ['placeholder' => "Date of Birth", 'class' => "form-control", 'id' => "birthday", 'v-model' => 'newProfile.second_part.birthday']) !!}
                    </div>

                    {!! Form::input('button', 'previous', "Previous", ['class' => "btn btn-wide btn-primary mrm previous"]) !!}

                    {!! Form::input('button', 'next', "Next", ['class' => "btn btn-wide btn-primary mrm next", 'v-attr' => "disabled: second"]) !!}

                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Social Profiles</h2>
                    <h3 class="fs-subtitle">Your presence on the social network</h3>
                    <div class="form-group">
                        {!! Form::input('url', 'twitterUrl', null, ['placeholder' => "Twitter Profile", 'class' => "form-control", 'id' => "twitterUrl", 'v-model' => 'newProfile.third_part.twitterUrl']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::input('url', 'facebookUrl', null, ['placeholder' => "Facebook Profile", 'class' => "form-control", 'id' => "facebookUrl", 'v-model' => 'newProfile.third_part.facebookUrl']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::input('url', 'gplusUrl', null, ['placeholder' => "Google+ Profile", 'class' => "form-control", 'id' => "gplusUrl", 'v-model' => 'newProfile.third_part.gplusUrl']) !!}
                    </div>

                    {!! Form::input('button', 'previous', "Previous", ['class' => "btn btn-wide btn-primary mrm previous"]) !!}

                    {!! Form::input('submit', 'submit', 'Submit', ['class' => "btn btn-wide btn-primary mrm submit", 'v-attr' => "disabled: first|second"]) !!}
                </fieldset>
            </form>
        </div>
    </div>

    @{{$data | json}}

</section>
@include('partials.footer')

@stop

@section('extra_scripts')
<script type="text/javascript">
    $('#birthday').datetimepicker({
        timepicker:false,
        defaultDate:"{{date('D, d M Y', strtotime('-18 years', strtotime('now')))}}",
        maxDate: "+{{date('D, d M Y', strtotime('-18 years', strtotime('now')))}}",
        format : "D, d M Y",
        yearEnd: {{date('Y', strtotime('-18 years', strtotime('now')))}}
    });
</script>
@stop
