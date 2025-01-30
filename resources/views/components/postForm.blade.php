<div class="postForms">
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    <form class="post-class" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="title">Post Title</label>
            <input type="text" name="title" id="title" class="input">
        </div>
        <div class="mb-4 h-full -z-50">
            <label for="title">Post Context</label>
            {{-- <textarea name="body" rows="5" class="body">{{ old('body') }}</textarea> --}}
            <textarea name="body" class="textarea w-full max-w-full resize-y overflow-auto p-3 border border-gray-300 rounded-md" id="editor"></textarea>
        </div>

        <div class="mb-4">
            <label for="image">Post Image</label>
            <input type="file" name="image" id="image">
        </div>

        <div class="mb-4">
            <button class="postbtn btn">Post Content</button>
        </div>
    </form>
</div>
