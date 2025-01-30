<x-layout>

    @auth
        <section class="all-posts">
            <div class="post-form">
                <div class="left-post">
                    <div class="users-suggest gap-5 mt-5">
                        @foreach ($users as $user)
                            <x-userProfileCard :user="$user" :user_profile_image="$user_profile_image" />
                        @endforeach
                    </div>
                </div>
                <div class="right-post">
                    <div class="title">
                        <h1>Share us your story to success.</h1>
                    </div>
                    <div class="form p-10">
                        <x-postForm />
                    </div>
                </div>
            </div>
            <div class="user-posts">
                <div class="title p-3">
                    <h1>Your Latest Post</h1>
                    <div class="post-grid grid grid-cols-4 mx-auto">
                        @foreach ($posts as $post)
                            <x-postCard :post="$post">
                                @auth
                                    <div class="buttons-slot">
                                        <button class="update-btn">
                                            <a href="{{ route('posts.edit', $post) }}">Update</a>
                                    </button>
                                    <button id="deleteButton" class="delete-btn text-red-500">Delete</button>
                                    </div>
                                    <div id="confirmModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden justify-center items-center">
                                        <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
                                            <h2 class="font-bold mb-4">Confirm Delete</h2>
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
                    <div>
                        @if (Auth::user())
                            {{ $posts->links() }}
                        @endif
                    </div>
                </div>
            </div>
            <div class="user-posts-mobile hidden">
                <div class="title p-3 flex justify-between align-middle w-96">
                    <a href="{{ route('posts.user', $userResponsive->id) }}" target="_blank" class="text-blue-500 text-sm ml-5">View your post &rarr;</a>
                </div>
            </div>
        </section>
    @endauth

    @guest
        <div class="min-h-svh bg-gray-100 flex items-center justify-center px-4">
            <div class="w-full max-w-2xl bg-white p-8 rounded-xl shadow-lg space-y-6">
                <div class="text-center">
                    <h1 class="text-2xl font-semibold text-gray-700 mb-4">Please Log In to Create a Post</h1>
                    <p class="text-gray-600 mb-6">You need to be logged in to access the post creation form.</p>
                    <a href="{{ route('login') }}"
                        class="bg-blue-600 text-white mr-2 py-3 px-6 rounded-lg hover:bg-blue-700 focus:outline-none">
                        Log In
                    </a>
                    <a href="{{ route('register') }}"
                        class="bg-blue-600 text-white ml-2 py-3 px-6 rounded-lg hover:bg-blue-700 focus:outline-none">
                        Register
                    </a>
                </div>
            </div>
        </div>
    @endguest

</x-layout>
