

<!-- <div class="mt-4">
    <button type="button" class="btn btn-success">add row</button>
</div> -->
@extends('layouts.app')
@section('content')
@section('title', 'Posts Table')
    <div class="container mt-5">
      <div class="mb-4">
        <a href="{{route ('posts.create')}}" type="button" class="btn btn-info">create post</a>
      </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">content</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $p)
                <tr>
                    <th>{{ $p['id'] }}</th>
                    <td>{{ $p['title'] }}</td>
                    <td>{{ $p['content'] }}</td>
                    <td>
                        <a href="{{ route('posts.edit') }}" class="btn btn-primary">edit</a>
                        <a href="{{ route('posts.show') }}" class="btn btn-success">view</a>
                        <button type="button" class="btn btn-danger">delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>   
      </div>

@endsection 