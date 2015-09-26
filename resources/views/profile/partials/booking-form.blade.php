{!!Form::open(['url'=>route('api.v1.bookings.store'), 'id' => 'booking-form', 'v-on'=>'submit: onSubmitForm'])!!}

    <div class="form-group">
        {!! Form::label('scheduled_at', 'Choose a time') !!}
        {!! Form::input('text', 'scheduled_at', null, ['placeholder' => "yyyy-mm-dd hh:mm:ss", 'id' => "service-time", 'class' => "form-control datetimepicker", 'v-model' => "newBooking.scheduled_at"]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('service_id', 'Select service') !!}
        {!! Form::select('service_id', array(), null, ['id' => "service-type", 'v-model'=> "serviceType", 'class' => "form-control", 'v-model' => "newBooking.service_id"]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('comments', 'Description:') !!}
        {!! Form::textarea('comments', null, ['class' => "form-control", 'rows' => "5", 'cols' => "40", 'v-model' => "newBooking.comments"]) !!}
    </div>

    {!! Form::button('Submit', ['type' => "submit", 'class' => "btn btn-wide btn-primary mrm", 'v-attr' => "disabled: errors"]) !!}

    {!! Form::button('Reset', ['type' => "reset", 'class' => "btn btn-wide btn-default", 'v-on' => 'click: onClickReset']) !!}

    <div class="alert alert-dismissible service-booked" role="alert" v-class="alert-success: bookingStatus.success, alert-danger: ! bookingStatus.success" v-show="bookingStatus.message">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    @{{bookingStatus.message}}
    </div>

{!!Form::close()!!}
