@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div></div>
                        <strong>Hello Movie</strong>
                        <a href="{{ url('movie/create') }}" class="btn btn-primary btn-sm float-right"><span
                                    class="glyphicon glyphicon-plus"></span>Add Movie</a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Movie Name</th>
                                <th>Language</th>
                                <th>Star</th>
                                <th>Create</th>
                                <th width="200px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($movie as $item)
                                <tr>
                                    <td>{{ $item['id'] }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['language'] }}</td>
                                    <td>{{ $item['star'] }}</td>
                                    <td>{{ $item['created_at'] }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('movie/'.$item['id']) }}" class="btn btn-success btn-sm">Show</a>
                                        <a href="{{ url('movie/'.$item['id']. '/edit') }}" class="btn btn-info btn-sm">Edit</a>
                                        <!-- Button Delete -->
                                        <form method="post" action="{{ url('movie/'.$item['id']) }}" style="display:inline;">
                                         @csrf
                                        <input type="hidden" name="_method" value="delete" >
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">No Data !!</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer" style="padding-bottom: 0px;">
                        {!! $movie->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
