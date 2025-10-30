@extends('layouts.app')
@section('content')
@section('title', 'Show Posts')
<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

    </div>
  </div>

  <div class="card">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <h5 class="card-title">title: {{ $post['title'] }}</h5>
      <p class="card-text">content: {{ $post['content'] }}</p>
      <p class="card-text">created at: {{ $post['created_at'] }}</p>
      <p class="card-text">created by: {{ $post['created_by'] }}</p>
    </div>
  </div>
</div>
@endsection