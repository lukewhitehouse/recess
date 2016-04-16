@extends('app')

@section('content')
    <h1>Admin area! Congrats {{ Auth::user()->name }}, you are logged in!</h1>
@stop
