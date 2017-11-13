@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Register</span>
                <form action="{{ route('register') }}" method="post">
                    {{ csrf_field() }}

                    <div class="input-field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="input-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="input-field">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <div class="input-field">
                        <label for="password_confirmation">Confirm password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required>
                    </div>

                    <div class="input-field">
                        <button type="submit" class="waves-effect waves-black btn yellow black-text">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.errors')
</div>
@endsection
