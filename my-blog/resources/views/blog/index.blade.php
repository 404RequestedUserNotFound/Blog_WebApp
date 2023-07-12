@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border border-dark" style="border-width: 3px;">
                <div class="card-header">{{ Auth::user()->name }}, you are logged in! You can share your thoughts now.

                <a href="/blog/create/post" class="btn btn-primary btn-sm">Post Blog</a>

                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <h1 class="display-one">Posted Blogs!</h1>
                            <p>  </p>
                        </div>

                    </div>
                    @forelse($posts as $post)
                    <ul>
                        <li><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                    @empty
                    <p class="text-warning">No blog Posts available</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
