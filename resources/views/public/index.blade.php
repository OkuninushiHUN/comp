@extends('public.layout')

@section('content')

    <ul>
        @forelse($users ?? [] as $user)
            <li>
                {{$user->name}} ({{$user->email}})


            </li>
        @empty
            <li>HIBA</li>
        @endforelse
    </ul>

@endsection





