@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">Blog Title: {{ ucfirst($post->title) }}</h1>
                <p>{!! $post->body !!}</p> 
                <hr>
                <a href="/blog/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit Post</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Post</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border border-dark" style="border-width: 3px;">
                <div class="card-header">{{ Auth::user()->name }}, you are logged in! You can share your thoughts now.

                <a href="/comment/create/post" class="btn btn-primary btn-sm">Post Blog</a>

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
                        <li><a href="./comment/{{ $post->id }}">{{ ucfirst($post->comment) }}</a></li>
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