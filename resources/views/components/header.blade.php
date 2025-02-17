<header x-data="{ open: false }">

    @guest
        <nav class="parent-nav grid grid-cols-1 p-4">
            <div class="left-nav flex justify-between items-center">
                <div class="logo">
                    <p class="text-4xl"><a href="/">sjs.</a></p>
                </div>
                <!-- Mobile Burger Menu -->
                <div class="sm:hidden flex items-center">
                    <button @click="open = !open" class="text-3xl relative">
                        <span class="block w-6 h-1 bg-black mb-1 transition-all duration-300 ease-in-out transform"
                            :class="{ 'rotate-45 translate-y-2': open }"></span>
                        <span class="block w-6 h-1 bg-black mb-1 transition-all duration-300 ease-in-out"
                            :class="{ 'opacity-0': open }"></span>
                        <span class="block w-6 h-1 bg-black transition-all duration-300 ease-in-out"
                            :class="{ '-rotate-45 -translate-y-2': open }"></span>
                    </button>
                </div>
                <!-- Desktop Menu -->
                <ul class="hidden sm:flex gap-6 ml-5">
                    <li><a href="{{ route('aboutme') }}" class="{{ request()->routeIs('aboutme') ? 'active' : '' }}">About Me</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                    <li><a href="{{ route('posts.index') }}" class="{{ request()->routeIs('posts.index') ? 'active' : '' }}">Posts</a></li>
                </ul>
            </div>
            <ul class="hidden sm:flex gap-4 ml-5 sm:col-span-1">
                <li><a href="{{ route('auth.login') }}">Login</a></li>
                <li><a href="{{ route('auth.register') }}">Register</a></li>
            </ul>
            <!-- Mobile Menu for guest -->
            <div x-show="open"
                class="absolute top-16 left-0 w-full bg-white shadow-lg z-10 transition-all duration-300 ease-in-out transform"
                :class="{ 'translate-x-0 opacity-100': open, 'translate-x-full opacity-0': !open }">
                <ul class="flex flex-col gap-4 px-5 py-3">
                    <li>
                        <a href="{{ route('aboutme') }}" class="{{ request()->routeIs('aboutme') ? 'active' : '' }}">About Me</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('posts.index') }}" class="{{ request()->routeIs('posts.index') ? 'active' : '' }}">Posts</a>
                    </li>
                    @if (Auth::user() && Auth::user()->usertype == 'admin')
                        <li><a href="{{ route('admin.manageUsers') }}" class="{{ request()->routeIs('admin.manageUsers') ? 'adminActive' : '' }}">Manage Users</a></li>
                    @endif
                    <li><a href="{{ route('auth.login') }}" class="{{ request()->routeIs('auth.login') ? 'active' : '' }}">Login</a></li>
                    <li><a href="{{ route('auth.register') }}" class="{{ request()->routeIs('auth.register') ? 'active' : '' }}">Register</a></li>
                </ul>
            </div>
        </nav>
    @endguest

    @auth
    <nav class="parent-nav grid grid-cols-1 sm:grid-cols-3 sm:gap-8 p-4">
        <div class="left-nav flex justify-between items-center sm:col-span-1">
            <div class="logo">
                <p class="text-4xl"><a href="{{ route('dashboard') }}">sjs.</a></p>
            </div>
            <!-- Burger Menu Button (Mobile) -->
            <button id="burger-menu" class="lg:hidden flex flex-col gap-1">
                <span class="block w-6 h-1 bg-black transition-all"></span>
                <span class="block w-6 h-1 bg-black transition-all"></span>
                <span class="block w-6 h-1 bg-black transition-all"></span>
            </button>
            <!-- Mobile Dropdown Menu -->
            <div id="mobile-menu" class="hidden z-10 absolute top-16 left-0 w-full bg-white shadow-lg lg:hidden">
                <nav class="flex flex-col gap-4 px-6 py-4">
                    <button @click="open = !open" type="button" class="round-btn overflow-y-hidden text-blue-900">
                        <p>Hello, <span class="text-xl capitalize font-bold "> {{ auth()->user()->firstname }}</span></p>
                    </button>
                    <a href="{{ route('aboutme') }}" class="hover:text-slate-500 {{ request()->routeIs('aboutme') ? 'active' : '' }}">About Me</a>
                    <a href="{{ route('createPosts') }}" class="hover:text-slate-500 {{ request()->routeIs('createPosts') ? 'active' : '' }}">Create a Post</a>
                    <a href="{{ route('posts.index') }}" class="hover:text-slate-500 {{ request()->routeIs('posts.index') ? 'active' : '' }}">Posts</a>
                    <a href="{{ route('contact') }}" class="hover:text-slate-500 {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                    @auth
                        @if (Auth::user()->usertype == 'admin')
                            <a href="{{ route('admin.manageUsers') }}" class="{{ request()->routeIs('admin.manageUsers') ? 'adminActive' : '' }}">Manage
                                Users</a>
                        @endif
                        <form action="{{ route('signout') }}" method="post">
                            @csrf
                            <button class="text-left">Sign Out</button>
                        </form>
                    @endauth
                    @guest
                        <a href="{{ route('auth.login') }}" class="{{ request()->routeIs('auth.login') ? 'active' : '' }}">Login</a>
                        <a href="{{ route('auth.register') }}" class="{{ request()->routeIs('auth.register') ? 'active' : '' }}">Register</a>
                    @endguest
                </nav>
            </div>
            <!-- Desktop Menu -->
            <ul class="hidden sm:flex gap-6 ml-5 list-none">
                <li><a href="{{ route('aboutme') }}" class="hover:text-slate-500 {{ request()->routeIs('aboutme') ? 'active' : '' }}">About Me</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-slate-500 {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                <li><a href="{{ route('createPosts') }}" class="hover:text-slate-500 {{ request()->routeIs('createPosts') ? 'active' : '' }}">Create a Post</a></li>
                <li><a href="{{ route('posts.index') }}" class="hover:text-slate-500 {{ request()->routeIs('posts.index') ? 'active' : '' }}">Posts</a></li>
                @if (Auth::user()->usertype == 'admin')
                    <li><a href="{{ route('admin.manageUsers') }}" class="hover:text-slate-500 {{ request()->routeIs('admin.manageUsers') ? 'adminActive' : '' }}">Manage Users</a></li>
                @endif
            </ul>
        </div>
        <div class="right-nav flex items-center justify-between sm:col-span-1">
            <div class="flex">
                <button @click="open = !open" type="button" class="btn-name round-btn overflow-y-hidden capitalize">
                    <p>{{ auth()->user()->firstname }}</p>
                </button>
            </div>
            {{-- Dropdown Menu --}}
            <div x-show="open" @click.outside="open=false"
                class="z-50 bg-white shadow-lg absolute top-10 right-0 rounded-lg overflow-hidden font-light border-top-1 w-48 sm:w-auto transition-all duration-300 ease-in-out transform">
                <p class="username pl-4 pr-8 py-2 mb-1 border-b-2">{{ auth()->user()->email }}</p>
                <a href="{{ route('profile') }}"
                    class="active block hover:bg-slate-100 pl-4 pr-8 py-2 mb-1">Profile</a>
                <form action="{{ route('signout') }}" method="post">
                    @csrf
                    <button class="block w-full text-left hover:bg-slate-100 pl-4 pr-8 py-2">Sign out</button>
                </form>
            </div>
        </div>
    </nav>
@endauth

</header>
