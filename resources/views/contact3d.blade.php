<x-layout>
    <div class="bg-gray-100 min-h-screen">
        <div class="container mx-auto py-12">
            <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <!-- Left Section -->
                    <div class="bg-gradient-to-br from-indigo-500 to-purple-700 p-8 text-white flex flex-col justify-between">
                        <div>
                            <h2 class="text-4xl font-extrabold mb-4">3D Designing | Interior | Exterior | Rendering</h2>
                            <p class="text-lg mb-6">With more than 7 years of experience, designing interior or exterior SketchUp project. I can design and render establishment etc. Feel free to reach out to me at any time.</p>
                            <ul class="space-y-4">
                                <li class="flex items-center">
                                    <svg class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405a1.037 1.037 0 00-1.576.073l-.743.743a6.036 6.036 0 01-8.499.22 6.03 6.03 0 01.22-8.499l.743-.743a1.037 1.037 0 00.073-1.576L3 9v5h5l1.405-1.405a1.037 1.037 0 00-.073-1.576l-.743-.743a6.036 6.036 0 01-.22-8.499 6.03 6.03 0 018.499-.22l.743.743a1.037 1.037 0 001.576-.073L15 3v5h5l-1.405 1.405a1.037 1.037 0 00-.073 1.576l.743.743a6.036 6.036 0 01.22 8.499 6.03 6.03 0 01-8.499.22l-.743-.743a1.037 1.037 0 00-1.576.073L9 15z" />
                                    </svg>
                                    <span>(+63) 993-731-9157</span>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-6">
                            <h3 class="text-xl font-bold">Sketchup</h3>
                            <img src="{{ URL('images/sketchup.webp') }}" alt="website development">
                        </div>
                    </div>

                    <!-- Right Section -->
                    <div class="p-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contact Form</h2>
                        <p class="text-sm text-gray-600 mb-8">Fill out the form below to send a message.</p>

                        @if (session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                            @csrf

                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Your Full Name</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                       class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-indigo-300 focus:outline-none">
                                @error('name')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Your Email Address</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                       class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-indigo-300 focus:outline-none">
                                @error('email')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea id="message" name="message" rows="4"
                                          class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-indigo-300 focus:outline-none">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex items-center justify-between">
                                <button type="reset"
                                class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded-lg focus:ring focus:ring-gray-300 focus:outline-none">
                                    Reset
                                </button>
                                <button type="submit"
                                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg focus:ring focus:ring-indigo-300 focus:outline-none">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
