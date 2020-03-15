@extends('auth.admin.layouts.app')

@section('content')

    <div class="flex flex-col">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Nom & prénom
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Parrain/Marraine
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Action
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach($notifications as $notification)
                        @php
                            $detail = json_decode($notification->data);
                        @endphp
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 font-medium text-gray-900">{{ $detail->last_name }} {{ $detail->first_name }}</div>
                                        <div class="text-sm leading-5 text-gray-500">{{ $detail->email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $detail->fbo_number }}</div>
                                <div class="text-sm leading-5 text-gray-500"><!--{{ \App\User::all()->where('fbo_number', $detail->fbo_number) }}--></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $notification->read_at ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }} ">
                {{ $notification->read_at ? 'Envoyé' : 'En attente' }}
              </span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                @if($notification->read_at === null)
                                    <form action="{{ route('dashboard.admin.password.send') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="notification[]" value="{{ $notification->id  }}">
                                        <input type="hidden" name="data[]" value="{{ json_encode($detail) }}">
                                        <button type="submit" class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline">Envoyer l'email</button>
                                    </form>
                                @endif
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
