@extends('layout/main')

@section('title', 'Detail Postingan')

@section('container')

<main class="container pt-5">
    <div class="p-4 p-md-5 mb-4 text-white rounded">
        <img src="img/Postingan/post/{{ $postingan->post_image }}" class="card-img-top" style="display: block; margin: auto; width:16cm">
    </div>

    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">{{ $postingan->post_name }}</h1>
            <p class="lead my-3">{{ $postingan->post_desc }}</p>

        </div>
    </div>

</main>

@endsection