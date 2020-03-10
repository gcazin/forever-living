@extends('layouts.app')

@section('content')
    <a href="{{ \Illuminate\Support\Facades\Storage::url('formations/'.$formation->link) }}
        ">Salut</a>
@endsection
