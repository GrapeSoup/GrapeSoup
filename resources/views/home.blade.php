@extends('layouts.app')

@section('content')
<div class="containers">

    <div class="section">
        <div class="row">

            <div class="col m3 l3">
                <div class="card hoverable">
                    <div class="card-content">
                        <span class="card-title">Your side</span>
                    </div>
                </div>
            </div>

            <div class="col m6 l6">
                <div class="card deep-purple darken-3 hoverable new-post">
                    <div class="card-content">
                        <span class="card-title grey-text text-lighten-4">A new post</span>
                        <form action="">
                            <div class="input-field">
                                <textarea id="textarea1" class="materialize-textarea browser-default"></textarea>
                                <label for="textarea1">Write your post</label>
                            </div>

                            <div class="input-field">
                                <button type="submit" class="waves-effect waves-black btn yellow
black-text">Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col m3 l3">
                <div class="card hoverable">
                    <div class="card-content">
                        <span class="card-title">Customisation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
