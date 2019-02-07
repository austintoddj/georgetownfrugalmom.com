@extends('layouts.app')

@section('title', $data['post']->title)

@push('meta')
    <meta name="description" content="{{ $data['meta']['meta_description'] }}">
    <meta name="og:title" content="{{ $data['meta']['og_description'] }}">
    <meta name="og:description" content="{{ $data['meta']['og_description'] }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ $data['meta']['twitter_description'] }}">
    <meta name="twitter:description" content="{{ $data['meta']['twitter_description'] }}">
    @isset($data['post']->featured_image)
        <meta name="og:image" content="{{ url($data['post']->featured_image) }}">
        <meta name="twitter:image" content="{{ url($data['post']->featured_image) }}">
    @endisset
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('components.nav.sidebar')
            </div>

            <div class="col-lg-9">
                <h1 class="content-title serif @unless($data['post']->summary) mb-4 @endif">{{ $data['post']->title }}</h1>
                @if($data['post']->summary)
                    <h4 class="text-muted mb-4">{{ $data['post']->summary }}</h4>
                @endif

                <div class="media py-1">
                    <img src="{{ sprintf('%s%s%s', 'https://secure.gravatar.com/avatar/', md5(strtolower(trim($data['author']->email))), '?s=200') }}"
                         class="mr-3 rounded-circle"
                         style="width: 50px"
                         alt="{{ $data['author']->name }}">
                    <div class="media-body">
                        <p class="mt-0 mb-1 font-weight-bold">{{ $data['author']->name }}</p>
                        <span class="text-muted">{{ \Carbon\Carbon::parse($data['post']->published_at)->format('M d, Y') }} — {{ $data['post']->readTime }}</span>
                    </div>
                </div>

                @isset($data['post']->featured_image)
                    <img src="{{ $data['post']->featured_image }}" class="w-100 pt-4"
                         @isset($data['post']->featured_image_caption) alt="{{ $data['post']->featured_image_caption }}"
                         title="{{ $data['post']->featured_image_caption }}" @endisset>
                    @isset($data['post']->featured_image_caption)
                        <p class="text-muted text-center pt-3">{!! $data['post']->featured_image_caption !!}</p>
                    @endisset
                @endisset

                <div class="content-body serif mt-4 pb-3">{!! $data['post']->body !!}</div>

                @if($data['post']->tags->count() > 0)
                    <h5>
                        @foreach($data['post']->tags as $tag)
                            <span><a href="{{ route('blog.tag.index', $tag->slug) }}"
                                     class="badge badge-light p-2">{{ $tag->name }}</a></span>
                        @endforeach
                    </h5>
                @endif
            </div>
        </div>
    </div>
@endsection