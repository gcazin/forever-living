@extends('layouts.app')

@section('content')
    <div class="py-16">

        <!-- Card container -->
        <div class="flex justify-between" id="card-container">
            <card title="Santé & bien-être" button="{{ __('card.formation') }}"></card>
            <card title="Amélioration des revenus" button="{{ __('card.formation') }}"></card>
            <card title="Économie sur hygiène quotidienne" button="{{ __('card.formation') }}"></card>
        </div>

    </div>
@endsection
