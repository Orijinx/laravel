@extends('layout')
@section('body')
    <div class="container page-block bg-white shadow-lg p-3 mb-5 bg-white rounded">
        <div class="p-2 bd-highlight ">
            @if (Route::has('login'))
                @auth
                    <p> Привет,{{Auth::User()->name}}!</p>

                    <a class="btn btn-outline-primary" href="{{url('/ticket')}}">Создать тикет</a>
                @else
                    @if (Route::has('register'))
                        <h1>Добро пожаловать!</h1>
                        <p>Вы находитесь на главной странице.</p>
                        <p>Для продолжения: Войдите или
                            Зарегестрируйтесь
                        </p>
                    @endif
                @endauth
            @endif


        </div>
    </div>


@endsection

@section('content')
    @if (Route::has('login'))
        @auth
            <div class="container page-block bg-white shadow-lg p-3 mb-5 bg-white rounded">

                @foreach(\App\ticket::all() as $tick)
                    @if($tick->userid == \Illuminate\Support\Facades\Auth::User()->id)
                        <ul>
                            <li><a href="{{url("/ticket/$tick->id")}}"><p>{{$tick->title}}</p></a></li>
                        </ul>
                    @endif
                @endforeach
            </div>
        @endauth
    @endif
@endsection



