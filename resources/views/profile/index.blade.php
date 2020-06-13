@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" alt="profile picture">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex">
                <div class="pr-4"><h2>{{ $user->username }}</h2></div>

                @can('update', $user->profile)
                    <div><a class="h3" href="/profile/{{ $user->id }}/edit">Edit Profile</a></div>
                @endcan

                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
            </div>

            <div class="d-flex">
                <div class="pr-4"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-4"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-4"><strong>{{ $followingCount }}</strong> following</div>
            </div>

            <div class="pt-3 font-weight-bold">{{ $user->name }}</div>

            <div>{{ $user->profile->bio }}</div>
            <div><a href="{{ $user->profile->website }}">{{ $user->profile->website }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach ($user->posts as $post)
            <div class="col-4 pt-4">
                <a href="/p/{{ $post->id }}">
                    <img class="w-100" src="/storage/{{ $post->image }}" alt="">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
