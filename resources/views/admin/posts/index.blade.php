@extends('admin.admin_layout')


@section('content')

    <div class="container pt-100">
        <div class="row">
            <div class="col-xs-12"><h2 class="section-title">Nyheder</h2></div>

            @foreach($posts as $post)
                <div class="col-md-4">
                <h3>{{ $post->title }}</h3>
                <img class="img-thumbnail" src="/images/post/{{ $post->imageUrl }}" alt=""/>
                    <p>{{ $post->content }}</p>
                </div>
            @endforeach

        </div>
    </div>

@endsection