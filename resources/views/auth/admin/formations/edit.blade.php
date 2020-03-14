@extends('auth.admin.layouts.app')

@section('content')
    <div class="container-full mb-5">
        <form action="{{ route('manage.content.edit.formation.admin', $formation->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="category_id">Catégorie de la formation</label>
                <select name="category_id" id="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Titre de la formation</label>
                <input type="text" name="title" id="title" value="{{ $formation->title }}">
            </div>
            <div class="form-group">
                <label for="title">Description de la formation</label>
                <input type="text" name="description" id="description" value="{{ $formation->description }}">
            </div>
            <div class="form-group">
                <label for="file">Formations à uploader</label>
                <input type="file" name="file" id="file">
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-blue">Publier</button>
            </div>
        </form>
    </div>
@endsection
