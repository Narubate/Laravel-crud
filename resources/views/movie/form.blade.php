@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @if(isset($movie))
                        <form method="post" action="{{ url('movie/'.$movie->id) }}">
                        <input name="_method" type="hidden" value="PUT">
                    @else
                        <form method="post" action="{{ url('movie') }}">
                    @endif
                        <div class="card-header">
                            <strong>
                                @if(isset($movie))
                                    Edit Movie
                                @else
                                    Add Movie
                                @endif
                            </strong>
                        </div>

                        <div class="card-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error  }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-2 col-form-label">Movie Name :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="name"
                                           value="{{ isset($movie->name) ? $movie->name : '' }}" id="name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="language" class="col-2 col-form-label">Language :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="language"
                                           value="{{ isset($movie->language) ? $movie->language : '' }}" id="language">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="star" class="col-2 col-form-label">Star :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="star"
                                           value="{{ isset($movie->star) ? $movie->star : '' }}" id="star">
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-right">
                            <input type="submit" class="btn btn-primary" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
