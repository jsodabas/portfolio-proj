@props(['post', 'full' => true])

<div class="userPost grid grid-cols-2 gap-6 sm:grid sm:grid-rows-2">
    <div class="card overflow-hidden">
        <div class="flex justify-center align-middle">
            @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="Sample" class="img-post">
            @else
            <img src="{{ asset('storage/posts_images/default image.jpg') }}" alt="" class="img-post">
            @endif
        </div>
        {{-- title --}}
        <h2 class="font-bold text-xl overflow-hidden">{{ $post->title }}</h2>

        {{-- author and date --}}
        <div class="text-sm font-light mb-4">
            <span>Posted {{ $post->created_at->diffForHumans() }} by</span>
            <a href="{{ route('posts.user', $post->user) }}" class="text-sm text-blue-500 font-medium">{{ $post->user->firstname }}</a>
            <span>
                @if ($post->updated_at != $post->created_at)
                    | Updated {{ $post->updated_at->diffForHumans() }}
                @endif
            </span>
        </div>
            @if ($full)
            <div class="text-sm">
            <p>
                {!! Str::limit(strip_tags($post->body), 40, '...') !!}
            <a href="{{ route('posts.show', $post) }}" class="text-blue-500 font-sm">Read More</a>
            </p>
            </div>
            @else
            <div class="text-sm">
            <p>{!! $post->body !!}</p>
            </div>
            @endif
        <div>
            {{ $slot }}
        </div>
    </div>
    {{-- body --}}
</div>
