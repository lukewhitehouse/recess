@extends('app')

@section('content')
    <h1>Account area! Congrats {{ $user->name }}, you are logged in!</h1>

    @if($holidays)
        <h5>Holiday requests</h5>
        <table>
            <thead>
                <th>Start date</th>
                <th>End date</th>
                <th>Description</th>
                <th>Type</th>
                <th>Status</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($holidays as $i)
                    <tr>
                        <td>
                            {{ $i->date_start }}
                        </td>
                        <td>
                            {{ $i->date_end }}
                        </td>
                        <td>
                            {{ $i->description }}
                        </td>
                        <td>
                            {{ $i->type }}
                        </td>
                        <td>
                            {{ $i->status }}
                        </td>
                        <td>
                            <a href="#">Edit holiday</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if($user)
        <h5>User details</h5>
        <dl>
            <dt>Name:</dt>
            <dd>{{ $user->name }}</dd>
            <dt>Email:</dt>
            <dd>{{ $user->email }}</dd>
        </dl>
    @endif
@stop
