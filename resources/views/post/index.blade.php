@extends('layouts.default')

@section('content')

    <div class="container my-3">

        <h1>{{ __('posts.posts_list') }}</h1>

        @forelse($posts as $post)
            <div class="card mb-5">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    <div class="card-text">
                        {!! $post->content !!}
                    </div>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        @empty
            <p>No posts found...</p>
        @endforelse

        {{ $posts->links() }}

    </div>

@endsection
