@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/comment" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Comment</h1>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                        <div class="control-group col-12">
                                <label for="comment">Edit Posted Comment</label>
                                <input type="text" id="comment" class="form-control" name="comment"
                                       placeholder="Enter Your Updated Comment" required>
                            </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Comment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
