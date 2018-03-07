@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Show Detail</strong>
                    </div>

                    <div class="card-body">
                        <ul>
                            <li>{{ $movie->name }}</li>
                            <li>{{ $movie->language }}</li>
                            <li>{{ $movie->star }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
