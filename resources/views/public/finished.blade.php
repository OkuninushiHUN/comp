@extends('public.layout')

@section('content')

    <table class="table table-striped table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Location</th>
            <th scope="col">Date</th>
            <th scope="col">D</th>
            <th scope="col">Open</th>
        </tr>
        </thead>
        <tbody>
        @forelse($list[0]?? [] as $row)
            <tr scope="row"> </tr>
            <td></td>
            <td>{{$row->location}}</td>
            <td>{{$row->date}}</td>
            <td> </td>

        @empty
            <tr>Unfortunetly there is no compatition</tr>
        @endforelse

        </tbody>
    </table>

@endsection

