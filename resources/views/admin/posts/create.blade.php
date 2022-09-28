@extends('layouts.app')

@section('content')

<header>
    <h1>
        Crea Nuovo Post
    </h1>

    
</header>
<form action="{{ route('admin.posts.store') }}" method="POST">
    
    <div class="row">
        <div class="col-12">

        
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
        </div>
        <div class="col-12">

        
            <div class="form-group">
                <label for="title">Testo</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-12">

        
            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="text" class="form-control" id="image" name="image">
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



@endsection