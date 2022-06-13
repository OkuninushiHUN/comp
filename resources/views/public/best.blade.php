@extends('public.layout')

@section('content')

    <table class="table table-striped table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">ELO</th>
        </tr>
        </thead>
        <tbody>
        @for($i = 0; $i < count($data) ; $i++ )
            <tr scope="row"> </tr>
            <td> {{$i+1}}</td>
            <td>{{$data[$i]->name}}</td>
            <td>{{$data[$i]->ELO}}</td>


        @endfor

        </tbody>
    </table>

@endsection
