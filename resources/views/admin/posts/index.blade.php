@extends('layouts.app')


@section('content')
<h1>Posts List</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Created at</th>
      <th scope="col">Modified at</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @forelse($posts as $post)
    <tr>
        <th scope="row">{{ $post->id }}</th>
        <td>{{ $post->title }}</td>
        <td>{{ $post->created_at }}</td>
        <td>{{ $post->updated_at }}</td>
        <td><a class="btn btn-sm btn-success" href="{{ route('admin.posts.show', $post->id) }}">Guarda post</a></td>
    </tr>
    @empty
    <tr>
        <td colspan="6">
            <h3>Zero Posts</h3>
        </td>
    </tr>
    @endforelse
  </tbody>
</table>


@endsection