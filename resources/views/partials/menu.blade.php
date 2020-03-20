<nav class="w-10/12 mx-auto" role="navigation">
    <div class="mx-auto py-4 flex flex-wrap items-center md:flex-no-wrap">
        <div class="">
            <a href="{{ route('home') }}" rel="home">
                <img src="{{ asset('storage/images/logo.png') }}" class="h-16">
            </a>
        </div>
        <div class="w-full md:w-auto md:flex-grow md:flex md:items-center">
            <ul class="flex flex-col mt-4 -mx-4 pt-4 border-t md:flex-row md:items-center md:mx-0 md:ml-auto md:mt-0 md:pt-0 md:border-0">
                <li class="mr-3 text-gray-600">
                    <a href="{{ route('lang', 'fr') }}">
                        <img class="inline" style="width: 20px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/1280px-Flag_of_France.svg.png" alt="">
                    </a>
                    /
                    <a href="{{ route('lang', 'en') }}">
                        <img class="inline" style="width: 20px" src="https://upload.wikimedia.org/wikipedia/commons/f/fc/Flag_of_Great_Britain_%28English_version%29.png" alt="">
                    </a>
                </li>
                @if(auth()->check() || session()->has('passcode'))
                    <li>
                        <label class="dropdown">
                            <div class="cursor-pointer btn btn-primary">
                                {{ auth()->check()
                                    ? 'MyAllonsY'
                                    : 'Session ('.session()->get('passcode').')'
                            }}
                            </div>
                            <input type="checkbox" class="dd-input" id="test">
                            <ul class="dd-menu">
                                @if(auth()->check() && auth()->user()->role_id === 1)
                                    <li><a href="{{ route('dashboard.admin') }}">Administration</a></li>
                                @endif
                                @if(auth()->check())
                                    <li><a href="{{ route('dashboard.fbo') }}">Mon compte</a></li>
                                @endif
                                <li class="divider"></li>
                                <li><a href="{{ route('logout') }}">Déconnexion</a></li>
                            </ul>
                        </label>
                    </li>
                @else
                    <li><a href="{{ route('login.fbo') }}" class="btn btn-primary">Connexion</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
