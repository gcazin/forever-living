@extends('layouts.app')

@section('content')
    <div class="container-full w-4/12 mx-auto">
        <form action="{{ route('login.passcode')}}?id={{ isset($_GET['id']) ? $_GET['id'] : 1 }}" method="post">
            @csrf
            <div class="form-group">
                <label class="form-label" for="passcode">Entrer votre passcode</label>
                <input
                    id="passcode"
                    class="form-control @error('passcode') is-invalid @enderror"
                    label="Entrer votre passcode"
                    name="passcode"
                    placeholder="Entrer votre passcode"
                    value="{{ old('passcode') }}">

                @error('passcode')
                <span class="error-message">
                    {{ $errors->first('passcode') }}
                </span>
                @enderror
            </div>

            <div class="form-group">
                <button class="btn btn-blue btn-block" type="submit">Connexion</button>
            </div>
        </form>
    </div>
@endsection
