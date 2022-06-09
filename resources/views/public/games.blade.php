@extends('private.layout')

@section('content')
    <br>
    <table class="table table-striped table-dark table-hover">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col"> </th>
            <th scope="col"></th>
            <th scope="col">Winner</th>

        </tr>
        </thead>
        <tbody>
        @forelse($list ?? [] as $row)

            <tr scope="row"> </tr>
            <td> {{$row->user_id1}}</td>
            <td>VS</td>
            <td>{{$row->user_id2}}</td>
            @if ($row->winner)
                <td>{{$row->user_id1}} </td>
            @else
                <td>{{$row->user_id2}}</td>
            @endif
        @empty
            <td>Unfortunately there is no matches</td>
        @endforelse

        </tbody>
    </table>
@endsection
