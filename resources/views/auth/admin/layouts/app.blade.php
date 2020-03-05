@extends('layouts.app', ['full' => true, 'margin' => false])

@section('content')
    @include('auth.admin.components.menu')

    <div class="w-10/12 mx-auto">
        @yield('dashboard')
    </div>
@endsection
