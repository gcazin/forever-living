@extends('auth.admin.layouts.app')

@section('content')
    <div class="container-full mb-5">
        <form action="{{ route('manage.content.edit.home.admin', $home_content->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" value="{{ $home_content->title }}">
            </div>
            <div class="form-group">
                <label for="title">Description</label>
                <textarea type="text" name="description" id="description">{{ $home_content->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="file">Contenu à uploader</label>
                <input type="file" name="file" id="file">
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-blue">Publier</button>
            </div>
        </form>
    </div>
@endsection
