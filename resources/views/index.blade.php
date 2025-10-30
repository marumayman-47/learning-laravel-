

<!-- <div class="mt-4">
    <button type="button" class="btn btn-success">add row</button>
</div> -->
@extends('layouts.app')
@section('content')
@section('title', 'Posts Table')
    <div class="container mt-5">
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
                        <button type="button" class="btn btn-primary">edit</button>
                        <a href="{{ route('posts.show') }}" class="btn btn-success">view</a>
                        <button type="button" class="btn btn-danger">delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>   
      </div>

@endsection 