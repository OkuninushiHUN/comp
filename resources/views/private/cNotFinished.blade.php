@extends('private.layout')

@section('content')


    <table class="table table-striped table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Location</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($list[0]?? [] as $row)
            <tr scope="row"> </tr>
            <td></td>
            <td>{{$row->location}}</td>
            <td>{{$row->date}}</td>

            <td> <a href="{{ route('details', ['id' => $row->id]) }}"><button>Details</button></a></td>

        @empty
            <tr scope="row" ></tr>
            <td colspan="5">Unfortunetly there is no compatition</td>
        @endforelse

        </tbody>
    </table>



@endsection
