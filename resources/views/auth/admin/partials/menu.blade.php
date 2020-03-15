<div class="menu my-3 px-2 flex flex-col">
    <span class="text-gray-600 text-sm px-4 mt-3 mb-2">Navigation</span>
    <a href="{{ route('dashboard.admin') }}" class="hover:bg-gray-800 text-gray-200 hover:text-white px-2 py-2 mb-1 rounded-lg duration-200 transition-all">
        <i class="fas fa-home text-lg mx-2"></i>
        <span class="font-bold">{{ $title_section ?? "Dashboard" }}</span>
    </a>

    <span class="text-gray-600 text-sm px-4 mt-3 mb-2">Gestion des utilisateurs</span>
    <a href="{{ route('dashboard.admin.notifications') }}" class="hover:bg-gray-800 text-gray-200 hover:text-white px-2 py-2 mb-1 rounded-lg duration-200 transition-all">
        <i class="fas fa-tasks text-lg mx-2"></i>
        <span class="font-bold">Traiter les demandes</span>
    </a>

    <span class="text-gray-600 text-sm px-4 mt-3 mb-2">Gérér le contenu</span>
    <a href="{{ route('manage.content.index.formation.admin') }}" class="hover:bg-gray-800 text-gray-200 hover:text-white px-2 py-2 mb-1 rounded-lg duration-200 transition-all">
        <i class="far fa-edit text-lg mx-2"></i>
        <span class="font-bold">Formations</span>
    </a>
    <a href="{{ route('manage.content.index.home.admin') }}" class="hover:bg-gray-800 text-gray-200 hover:text-white px-2 py-2 mb-1 rounded-lg duration-200 transition-all">
        <i class="far fa-edit text-lg mx-2"></i>
        <span class="font-bold">Accueil</span>
    </a>

    <span class="text-gray-600 text-sm px-4 mt-3 mb-2">Statistiques</span>
    <a class="hover:bg-gray-800 text-gray-200 hover:text-white px-2 py-2 mb-1 rounded-lg duration-200 transition-all">
        <i class="far fa-chart-bar text-lg mx-2"></i>
        <span class="font-bold">Statistiques</span>
    </a>
</div>
