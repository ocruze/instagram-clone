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
                <div class="pr-4"><strong>153</strong> posts</div>
                <div class="pr-4"><strong>153</strong> followers</div>
                <div class="pr-4"><strong>153</strong> following</div>
            </div>

            <div class="pt-3 font-weight-bold">Arnest name </div>

            <div>This is a cool bio. And Im gonna copy it twice. This is a cool bio. And Im gonna copy it twice. This is a cool bio. And Im gonna copy it twice.</div>
            <div><a href="ocruze.com">o.cruze.com</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="https://i.pinimg.com/236x/e6/51/9d/e6519deef45ae9b1ecdab2946661a86b--square-art-abstract-trees.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://image.shutterstock.com/image-vector/optical-illusion-art-square-vector-600w-246338842.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://www.votreportrait.fr/2384-large_default/roy-lichtenstein-portrait-photo-comic.jpg" alt="">
        </div>
    </div>
</div>
@endsection
