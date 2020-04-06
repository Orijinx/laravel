@extends('layout')
@section('body')
    <div class="container page-block bg-white shadow-lg p-3 mb-5 bg-white rounded">
        <div class="p-2 bd-highlight ">
            @if (\Illuminate\Support\Facades\Auth::User()->id == $ticket->userid)
                @auth

                    <h1 style="border-bottom: 2px gray solid;">{{$ticket->title}}</h1>
                    <p>{{$ticket->body}}</p>

                @endauth
            @endif
        </div>
    </div>
@endsection
