@extends ('layouts.master')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">Register</div>
        <div class="panel-body">
            {!! Form::open(array('route' => 'events.store')) !!}
            <div class="form-group">
                {!! Form::label('user_id', 'User') !!}
                {!! Form::text('user_id', null, array('class' => 'form-control text-center')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', 'Event Name') !!}
                {!! Form::text('name', null, array('class' => 'form-control text-center')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Event Reason') !!}
                {!! Form::text('reason', null, array('class' => 'form-control text-center')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Location') !!}
                {!! Form::text('location', null, array('class' => 'form-control text-center')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Time') !!}
                {!! Form::text('time', null, array('class' => 'form-control text-center')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Date') !!}
                {!! Form::text('date', null, array('class' => 'form-control text-center')) !!}
            </div>
            {!! Form::token() !!}
            {!! Form::submit('Create Event', array('class' => 'btn btn-success btn-block')) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection