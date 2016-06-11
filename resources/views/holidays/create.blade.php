@extends('app')

@section('content')
    <h1>Submit a request!</h1>

    {!! Form::open(array('class' => '', 'action' => 'HolidaysController@index')) !!}

        {!! Form::label('date_start', 'Start date') !!} <br>
        {!! Form::date('date_start', \Carbon\Carbon::now(), ['required']) !!} <br>

        {!! Form::label('date_end', 'End date') !!} <br>
        {!! Form::date('date_end', \Carbon\Carbon::tomorrow(), ['required']) !!} <br>

        {!! Form::label('description', 'Description') !!} <br>
        {!! Form::textarea('description', null, ['required']) !!} <br>

        {!! Form::label('type', 'Type') !!} <br>
        {!! Form::select('type', array(
            'holiday' => 'Holiday',
            'unpaid' => 'Unpaid Leave',
            'lieu' => 'Time off in lieu'
        ), null, ['required']) !!} <br>

        {!! Form::submit('Submit holiday request') !!}

    {!! Form::close() !!}
@stop
