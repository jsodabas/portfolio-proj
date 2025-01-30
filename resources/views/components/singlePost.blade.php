@props(['post'])

<div class="container mx-auto px-4 py-8">
    <!-- Post Section -->
    <div class="max-w-4xl mx-auto bg-white shadow rounded-lg overflow-hidden">
        <!-- Post Image -->
        @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="Sample" class="img-post">
        @else
        <img src="{{ asset('storage/posts_images/default image.jpg') }}" alt="" class="img-post">
        @endif
            {{-- <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-single-post w-full object-cover"> --}}

        <!-- Post Content -->
        <div class="p-6">
            <!-- Title -->
            <h1 class="text-3xl font-bold text-gray-800">{{ $post->title }}</h1>

            <!-- Author and Date -->
            <div class="flex items-center space-x-4 mt-4 text-sm text-gray-500">
                <p>By <span class="font-semibold capitalize">{{ $post->user->firstname }} {{ $post->user->lastname }}</span></p>
                <span>&#x2022;</span>
                <p>{{ $post->created_at->diffForHumans() }}</p>
                <span>
                    @if ($post->updated_at != $post->created_at)
                        | Updated {{ $post->updated_at->diffForHumans() }}
                    @endif
                </span>
            </div>

            <!-- Content -->
            <div class="mt-6 text-gray-700 leading-relaxed">
                {{-- {!! nl2br(e($post->body)) !!} --}}
                {!! $post->body !!}
            </div>
        </div>
    </div>
    <!-- Existing Comments -->
    <div class="mt-4">
        @forelse ($post->comments as $comment)
            <div class="border-b border-gray-200 py-4">
                <p class="text-sm font-semibold capitalize">{{ $comment->user->firstname }} {{ $comment->user->lastname }}</p>
                <p class="text-sm text-gray-600">{{ $comment->created_at->diffForHumans() }}</p>
                <p class="mt-2 text-gray-800">{{ $comment->content }}</p>
            </div>
        @empty
            <p class="text-gray-500">No comments yet. Be the first to comment!</p>
        @endforelse
    </div>

    @auth
        <!-- Comments Section -->
        <div class="mt-8">
            <h2 class="text-2xl font-bold">There are {{ $post->comments->count() }}
                @if ($post->comments->count() < 2)
                    comment
                @else
                    comments
                @endif
                on this post</h2>

            <!-- Add Comment Form -->
            <form action="{{ route('comments.store', $post) }}" method="POST" class="mt-6">
                @csrf
                <textarea name="content" rows="3" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Write a comment..."></textarea>
                <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Post Comment</button>
            </form>
        </div>
    @endauth

    @guest
        <div class="info-box flex align-middle justify-self-center text-center mt-20">
            <p><a href="{{ route('login') }}" class="underline text-blue-700">Login</a> / <a href=" {{ route('register') }}" class="underline text-blue-700">Register</a> if you want to give a comment on this post</p>
        </div>
    @endguest
</div>
