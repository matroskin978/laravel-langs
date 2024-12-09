@extends('layouts.default')

@section('content')

    <div class="container my-3">

        <h1>{{ __('posts.post') }}: {{ $post->desc->title }}</h1>

        <div class="card mb-5">
            <div class="card-header">
                {{ $post->desc->title }}
            </div>
            <div class="card-body">
                <div class="card-text">{!! $post->desc->content !!}</div>
            </div>
        </div>

    </div>

@endsection

