<x-layout>
<section class="all-posts">

    <div class="post-form">
        <div class="right-post p-10">
            <div class="title">
                <h1>Update your post</h1>
                @if (session('success'))
                <div class="mb-2">
                    <x-flashMsg msg="{{ session('success') }}" />
                </div>
            @endif
            </div>
            <div class="form p-10">
                {{-- <x-postForm /> --}}
                <form class="post-class" action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- Post Title --}}
                    <div class="mb-4">
                        <label for="title">Update Title</label>
                        <input type="text" name="title" id="title" class="input" value="{{ $post->title }}">
                    </div>
                    {{-- Post Body --}}
                    <div class="mb-4">
                        <label for="title">Update Context</label>
                        {{-- <textarea name="body" rows="5" class="body">{{ old('body') }}</textarea> --}}
                        <textarea name="body" id="editor"></textarea>
                    </div>

                    {{-- Post image --}}
                    <div class="mb-4">
                        <label for="image">Current Image</label>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Sample" class="">
                    </div>
                    <div class="mb-4">
                        <label for="image">Upload New Image</label>
                        <input type="file" name="image" id="image" value="{{ $post->image }}">
                    </div>

                    <div class="mb-4 flex justify-between align-middle">
                        <button class="text-red-500 hover:text-red-700 hover:underline">
                            <a href="{{ route('posts.index') }}">Cancel</a>
                        </button>
                        <button class="btn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</x-layout>
