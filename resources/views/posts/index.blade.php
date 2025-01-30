<x-layout>
    <div class="p-4 max-w-7xl mx-auto">
        @if ($posts->count() == 0)
            <h1 class="title text-xl font-bold text-center">There's no post yet</h1>
        @else
            <h1 class="title text-xl font-bold text-center mb-4">Latest Post</h1>
        @endif

        <div class="grid lg:grid-cols-3 sm:grid-cols-1">
            @foreach ($posts as $post)
                <x-postCard :post="$post" />
            @endforeach
        </div>

        <div class="mt-6">
            @if (Auth::user())
                {{ $posts->links('pagination::tailwind') }}
            @endif
        </div>

        @if (!Auth::user())
            <div class="info-box flex flex-col items-center text-center mt-10">
                <p class="text-sm sm:text-base">
                    Want to create a post?
                    <a href="{{ route('login') }}" class="underline text-blue-700 hover:text-blue-500">Login</a> /
                    <a href="{{ route('register') }}" class="underline text-blue-700 hover:text-blue-500">Register</a>
                </p>
            </div>
        @endif
    </div>

</x-layout>
