@extends('private.layout')

@section('content')

    <table class="table table-striped table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Participants</th>
            <th></th>
        </tr>
        </thead>
        <tbody>


        @if (count($list) != 0)
            <ol>
            @for($i = 0; $i < count($list);$i++)
            <tr>
                <li>
                <td>{{$i+1}}</td>
                <td>{{$list[$i]->name}}</td>
                <td>{{$list[$i]->ELO}}</td>
                    </li>
            </tr>

            </ol>
            @endfor
        @else
            <tr>
            <form method="post" action="{{route('join',$id)}}">
                @csrf
                <td colspan="6">Be the first: <a><button type="submit">Join</button></a></td></form>
            </tr>
        @endif
        <tr>

            <td colspan="3"> <a class="btn btn-light" href="{{route('showGames',$id)}}">Show me the matches</a></td>
        </tr>
        </tbody>

    </table>


@endsection
