@if($post->exists)
<form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
    @method('PUT')
@else
<form action="{{ route('admin.posts.store') }}" method="POST">
@endif


    @csrf
    <div class="row">
        <div class="col-12">

        
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
            </div>
        </div>
        <div class="col-12">

        
            <div class="form-group">
                <label for="title">Testo</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ old('content', $post->content) }}</textarea>
            </div>
        </div>
        <div class="col-12">

        
            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $post->image) }}">
            </div>
        </div>
    </div>


    <div class="d-flex justify-content-between">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Torna alla lista</a>

        

        <button class="btn btn-success" id="button" type="submit">
            Salva Post
        </button>
    </div>
</form>