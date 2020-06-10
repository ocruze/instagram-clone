@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTOS7KNcMLI-A9ab3kc9r83EQSpMJWjjTeNkAf1h9ebXIXlwpc6&usqp=CAU" class="rounded-circle" alt="profil picture">
        </div>
        <div class="col-9 p-5">
            <div><h1>{{ $user->username }}</h1></div>

            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4"><strong>153</strong> followers</div>
                <div class="pr-4"><strong>153</strong> following</div>
            </div>

            <div class="pt-3 font-weight-bold">{{ $user->name }}</div>

            <div>{{ $user->profile->bio }}</div>
            <div><a href="{{ $user->profile->website }}">{{ $user->profile->website }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach ($user->posts as $post)
            <div class="col-4 pt-4">
                <img class="w-100" src="/storage/{{ $post->image }}" alt="">
            </div>
        @endforeach
    </div>
</div>
@endsection
