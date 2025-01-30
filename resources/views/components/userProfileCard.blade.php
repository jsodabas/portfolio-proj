<div class="each-user p-3">
    <div class="user-image">
        @if($user->profile_img && file_exists(public_path('storage/' . $user->profile_img)))
            <img src="{{ asset('storage/' . $user->profile_img) }}" alt="Profile Picture" class="w-4 h-4 object-cover object-center flex justify-center align-middle rounded-full mx-auto border-2 border-slate-900">
        @else
            <img src="{{ URL('user_images/default_user_icon.jpg') }}" alt="Profile Picture" class="w-4 h-4 object-cover rounded-full mx-auto border-2 border-slate-900">
        @endif
    </div>
    <div class="user-info grid grid-rows-2">
        <div class="name flex flex-col">
            <h1 class="text-sm font-bold capitalize">{{ $user->firstname }} {{ $user->lastname }}</h1>
            <p class="text-s">
                @if ($user->posts->count() === 0)
                No post yet
                @else
                {{ $user->posts->count() }}
                    @if ($user->posts->count() < 2)
                    Post
                    @else
                    Posts
                    @endif
                @endif
            </p>
        </div>
        <div class="view-prof">
            <button><a href="{{ route('posts.user', $user->id) }}" target="_blank" class="text-blue-500 hover:text-blue-700">
                @if ($user->id === Auth::id())
                View Your Profile
                @else
                View <span class="capitalize">{{ $user->firstname }}</span>'s Profile
                @endif
            </a></button>
        </div>
    </div>
</div>
