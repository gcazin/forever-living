<div class="bg-white mb-8">
    <nav class="w-10/12 mx-auto flex flex-col sm:flex-row">
        <a href="{{ route('dashboard.admin') }}" class="text-gray-600 py-4 px-3 block hover:text-blue-500 focus:outline-none {{ (request()->is('dashboard/admin')) ? 'text-blue-500 border-b-2 font-medium border-blue-500' : '' }}">
            <i class="far fa-chart-bar"></i> Statistiques
        </a>
        <button class="text-gray-600 py-4 px-3 block hover:text-blue-500 {{ (request()->is('dashboard/notifications')) ? 'text-blue-500 border-b-2 font-medium border-blue-500' : '' }} focus:outline-none">
            <i class="far fa-bell"></i> Notifications
        </button>
            <a href="{{ route('manage.content.add.formation.admin') }}" class="text-gray-600 py-4 px-3 block hover:text-blue-500 focus:outline-none {{ (request()->is('dashboard/admin/manage-content*')) ? 'text-blue-500 border-b-2 font-medium border-blue-500' : '' }}">
            <i class="far fa-edit"></i> Gérer les contenus
        </a>
    </nav>
</div>
