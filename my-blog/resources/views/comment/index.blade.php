@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border border-dark" style="border-width: 3px;">

                <a href="/comment/create/post" class="btn btn-primary btn-sm">Comment</a>

                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <h1 class="display-one">Previeous Comments</h1>
                            <p>  </p>
                        </div>

                    </div>
                    @forelse($posts as $post)
                    <ul>
                        <li><a href="./comment/{{ $post->id }}">{{ ucfirst($post->comment) }}</a></li>
                    </ul>
                    @empty
                    <p class="text-warning">No comments yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
