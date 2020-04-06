@extends('layout')

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>{{Auth::User()->email}}</h1></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <H3>Ваша информация:</H3>
                        @auth
                            <ul>
                                <li>{{Auth::User()->name}}</li>
                                <li>{{Auth::User()->email}}</li>
                                @if (Auth::User()->isManager == True)
                                    <li>Type:Manager</li>
                                @else
                                    <li>Type:User</li>
                                @endif
                            </ul>
                        @endauth

{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
{{--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                        </a>--}}

                        <a class="btn btn-outline-danger" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
