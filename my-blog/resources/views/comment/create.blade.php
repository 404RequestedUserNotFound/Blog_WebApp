@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/comment" class="btn btn-outline-primary btn-sm">Go back</a>

                    


                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="comment">Comment Now</label>
                                <input type="text" id="comment" class="form-control" name="comment"
                                       placeholder="Enter Your Comment" required>
                            </div>
                                <button id="btn-submit" class="btn btn-primary">
                                    Comment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection