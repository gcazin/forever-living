@extends('layouts.app')

@section('content')

    <div class="bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Descriptif du fichier
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                            Description du fichier et lien de téléchargement
                        </p>
                    </div>
                    <div>
                        <dl>
                            <div class="bg-gray-50 px-4 py-5 sm:flex sm:px-6">
                                <dt class="w-4/12 leading-5 font-medium text-gray-500">
                                    Nom
                                </dt>
                                <dd class="w-8/12 mt-1 leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $formation->title }}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:flex sm:px-6">
                                <dt class="w-4/12 leading-5 font-medium text-gray-500">
                                    Description
                                </dt>
                                <dd class="w-8/12 mt-1 leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $formation->description }}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:flex sm:px-6">
                                <dt class="w-4/12 leading-5 font-medium text-gray-500 mb-1">
                                    Fichier-joint
                                </dt>
                                <dd class="rounded-lg w-8/12 mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <ul class="rounded-lg border border-gray-200 rounded-md">
                                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                                            <div class="w-0 flex-1 flex items-center">
                                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="ml-2 flex-1 w-0 truncate">
                        {{ \Illuminate\Support\Facades\Storage::url('formations/'.$formation->link) }}
                      </span>
                                            </div>
                                            <div class="ml-4 flex-shrink-0">
                                                <a href="{{ \Illuminate\Support\Facades\Storage::url('formations/'.$formation->link) }}" class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">
                                                    Télécharger
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
