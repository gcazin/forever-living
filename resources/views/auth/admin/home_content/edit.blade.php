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
                <label for="link">ID de la vidéo <span class="text-lowercase">(ex: https://www.youtube.com/watch?v=<span class="text-blue-500">S4CiuStdSc8</span>)</span></label>
                <input type="text" name="link" id="link">
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-blue">Publier</button>
            </div>
        </form>
    </div>
@endsection
