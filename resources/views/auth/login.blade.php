@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="section">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title">Login now</span>
                    <form action="{{ route('login') }}" method="post">

                        {{ csrf_field() }}

                        <div class="input-field">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="{{ $errors->has('email') ? ' invalid' : ''}}" autocomplete>
                        </div>

                        <div class="input-field">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="{{ $errors->has('password') ? '
                            invalid' : ''}}">
                        </div>

                        <div class="input-field">
                            <button type="submit" class="waves-effect waves-black btn yellow black-text">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('layouts.errors')
    </div>
@endsection
