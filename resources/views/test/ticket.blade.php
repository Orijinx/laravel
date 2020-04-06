@extends('layout')
@section('body')
    @if (Route::has('login'))
        @auth
            <div class="container page-block bg-white shadow-lg p-3 mb-5 bg-white rounded">
                <form method="POST" action="{{ url('/createTicket') }}">
                    @csrf


                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" rows="3"
                                   value="{{ old('title') }}" required autocomplete="title" autofocus>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Body') }}</label>

                        <div class="col-md-6">
                    <textarea id="body" type="text" class="form-control" name="body" rows="3"
                              value="{{ old('body') }}" required autocomplete="body" autofocus></textarea>

                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Отправить') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        @else
            <div class="container page-block bg-white shadow-lg p-3 mb-5 bg-white rounded">
                <h1>Вы не вошли!</h1>
            </div>

        @endauth
    @endif
@endsection
