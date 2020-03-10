@extends('layouts.app')

@section('content')
    @include('auth.fbo.partials.formations-list', ['home_content' => $formations])
@endsection
