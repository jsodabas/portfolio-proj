<x-layout>

    <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-6 px-10 pb-10">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="p-4 flex justify-start">
                <div class="img-prof-section flex-col mr-3">
                    @if($user->profile_img)
                    <img src="{{ asset('storage/' . $user->profile_img) }}" alt="Profile Picture" class="w-10 h-10 object-cover object-center flex justify-center align-middle rounded-full mx-auto border-2 border-slate-900">
                    @else
                    <img src="{{ URL('user_images/default_user_icon.jpg') }}" alt="Profile Picture" class="w-10 h-10 object-cover rounded-full mx-auto border-2 border-slate-900">
                    @endif
                </div>
                <div class="name">
                    <h2 class="text-lg font-bold text-gray-800 capitalize">{{ $user->firstname }} {{ $user->lastname }}</h2>
                    <p class="text-sm text-gray-600">{{ $user->email }}</p>
                </div>
                <div class="post-count flex justify-center align-middle pl-10">
                    <h2 class="text-md font-medium text-gray-800">
                        @if ($user != auth()->user())
                        This user has
                        @else
                        You have
                        @endif
                        {{ $posts->count() }}
                        @if ($posts->count() < 2)
                            post
                        @else
                            posts
                        @endif
                    </h2>
                </div>
            </div>
            <div class="border-t p-4">
                <h3 class="text-sm font-semibold text-gray-800 mb-2">Posts:</h3>
                <div class="grid grid-cols-1 sm:grid-cols-1 sm:justify-center md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($posts as $post)
                    <x-postCard :post="$post">
                        @auth
                            @if ($user != auth()->user())
                                <div></div>
                            @else
                                <div class="buttons-slot">
                                    <button class="update-btn">
                                        <a href="{{ route('posts.edit', $post) }}">Update</a>
                                </button>
                                <button id="deleteButton" class="delete-btn text-red-500">Delete</button>
                                </div>
                                {{-- delete post --}}
                            @endif
                            <div id="confirmModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden justify-center items-center">
                                <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
                                    <h2 class="text-xl font-bold text-gray-800 mb-4">Confirm Delete</h2>
                                    <p class="text-gray-700 mb-6">Do you really want to delete this post? This action cannot be undone.</p>
                                    <div class="flex justify-end space-x-4">
                                        <button
                                            id="cancelButton"
                                            class="update-btn">Cancel
                                        </button>
                                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                class="delete-btn text-red-500">
                                                Confirm
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endauth
                    </x-postCard>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>
