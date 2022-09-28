@extends('layouts.app')


@section('content')
<h1>{{ $post->title }}</h1>
<section>
    

    <div>
        @if($post->image)
            <img src="{{ $post->image }}" alt="post-image" class="float-left mr-3 img-fluid">
        @endif
        <p>{{ $post->content }}</p>
    </div>

    <p>Creato il: {{ $post->created_at }}</p>
    <p>Modificato il: {{ $post->updated_at }}</p>
</section>

<footer class="d-flex align-items-center justify-content-between">
    <div>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Torna indietro</a>
    </div>
    <div>

    </div>
</footer>

@endsection