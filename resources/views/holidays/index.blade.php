@extends('app')

@section('content')
    <h1>Show all holidays here</h1>

    <p>holidays, holidays, holidays!</p>

    @if($holidays)
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
    @endif;
@stop
