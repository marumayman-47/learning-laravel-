@extends('layouts.app')
@section('content')
@section('title', 'create Posts')
    <div class="container mt-5">
      <h2>Create Post</h2>
      <form>
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" placeholder="Enter title">
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea class="form-control" id="content" rows="3" placeholder="Enter content"></textarea>
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Created by</label>
          <select>
            <option value="1">User 1</option>
            <option value="2">User 2</option>
            <option value="3">User 3</option>
            </select>
        </div>
        <a href=" {{route ('posts.index')}}" type="submit" class="btn btn-primary">Submit</a>
      </form>
    </div>
