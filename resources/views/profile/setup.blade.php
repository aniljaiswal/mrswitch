@extends('profile.profile-layout')

@section('content')

@include('profile.partials.nav')

<section>

    <div class="container">
        <div id="formbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <!-- multistep form -->
            {!!Form::open(['url'=>url('/profile/setup'), 'id' => 'msform'])!!}
                <div class="heading">
                    <h1>Let's get started.</h1>
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Contact Information</li>
                        <li>Personal Details</li>
                        <li>Social Profiles</li>
                    </ul>
                </div>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Contact Information</h2>
                    <h3 class="fs-subtitle">We will never sell it</h3>
                    <div class="form-group">
                        <input type="text" name="fname" placeholder="First Name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lname" placeholder="Last Name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="tel" name="phone" placeholder="Phone" class="form-control"/>
                            <div class="input-group-addon send-otp-btn">Send OTP</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="address" placeholder="Address" class="form-control"></textarea>
                    </div>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Personal Details</h2>
                    <h3 class="fs-subtitle">So we can serve you better</h3>
                    <label class="radio-inline">
                    <input type="radio" name="gender" id="gender1" value="male"> Male
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="gender" id="gender2" value="female"> Female
                    </label>

                    <div class="form-group">
                        {!! Form::input('text', 'date_of_birth', null, ['placeholder' => "Date of Birth", 'class' => "form-control", 'id' => "dateofbirth"]) !!}
                    </div>

                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Social Profiles</h2>
                    <h3 class="fs-subtitle">Your presence on the social network</h3>
                    <div class="form-group">
                        <input type="url" name="twitter" placeholder="Twitter" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <input type="url" name="facebook" placeholder="Facebook" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <input type="url" name="gplus" placeholder="Google Plus" class="form-control"/>
                    </div>

                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="submit" name="submit" class="submit action-button"/>
                </fieldset>
            </form>
        </div>
    </div>

</section>
@include('partials.footer')

@stop

@section('extra_scripts')
<script type="text/javascript">
    $('#dateofbirth').datetimepicker({
        format:'D, d M Y'
    });

    $(".submit").click(function(){
    	// return false;
    });

</script>
@stop
