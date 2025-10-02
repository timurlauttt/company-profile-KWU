<nav class="bg-white shadow mb-8 px-25">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="/" class="text-xl font-bold text-gray-800">{{ config('app.name', 'Laravel') }}</a>
        <div class="space-x-4">
            <a href="/" class="text-gray-700 hover:text-blue-600 border-b-2 transition-all {{ request()->is('/') ? 'border-blue-600' : 'border-transparent' }}">Home</a>
            <a href="#" class="text-gray-700 hover:text-blue-600 border-b-2 transition-all {{ request()->is('work') ? 'border-blue-600' : 'border-transparent' }}">Work</a>
            <a href="#" class="text-gray-700 hover:text-blue-600 border-b-2 transition-all {{ request()->is('services') ? 'border-blue-600' : 'border-transparent' }}">Services</a>
            <a href="#" class="text-gray-700 hover:text-blue-600 border-b-2 transition-all {{ request()->is('team') ? 'border-blue-600' : 'border-transparent' }}">Team</a>
            <a href="#" class="text-gray-700 hover:text-blue-600 border-b-2 transition-all {{ request()->is('career') ? 'border-blue-600' : 'border-transparent' }}">Career</a>
            <a href="#" class="text-gray-700 hover:text-blue-600 border-b-2 transition-all {{ request()->is('portofolio') ? 'border-blue-600' : 'border-transparent' }}">Portofolio</a>
            <a href="#" class="text-gray-700 hover:text-blue-600 border-b-2 transition-all {{ request()->is('contact') ? 'border-blue-600' : 'border-transparent' }}">Contact</a>
        </div>
    </div>
</nav>
