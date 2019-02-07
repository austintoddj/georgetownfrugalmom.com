@extends('layouts.app')

@section('title', sprintf('%s — %s', config('app.name'), 'Blog'))

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('components.nav.sidebar')
            </div>

            <div class="col-lg-9">
                @foreach($data['posts'] as $post)
                    <p class="mb-2 text-muted text-uppercase font-weight-bold">Published
                        on {{ \Carbon\Carbon::parse($post->published_at)->format('M d, Y') }}</p>
                    <h1 class="serif my-2 content-title"><a
                                href="{{ route('blog.post.show', $post->slug) }}">{{ $post->title }}</a></h1>
                    <p class="content-body serif mb-2">{{ str_limit(strip_tags($post->body), 200) }}</p>

                    <div class="d-flex justify-content-between mb-5">
                        <p class="text-uppercase text-muted">{{ $post->readTime }}</p>
                        <a href="{{ route('blog.post.show', $post->slug) }}" class="text-muted text-uppercase">Read
                            full post</a>
                    </div>
                @endforeach

                <div class="row mx-auto justify-content-center">
                    {{ $data['posts']->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection