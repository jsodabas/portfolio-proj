
<x-layout>
    <div class="flex">
        <div class="flex-1 p-8">
            <div class="text-xl font-semibold text-gray-800 mb-8">
                <h2>Profile Settings</h2>
            </div>
            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow-lg rounded-lg p-6">
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="img-prof-section flex-col">
                            <div class="text-xl font-semibold text-gray-800 mb-8">
                                <h2>Current Profile</h2>
                            </div>
                            {{-- <img src="{{ URL('user_images/default_user_icon.jpg') }}" alt="Profile Picture" class="w-96 h-96 object-cover rounded-full mx-auto border-2 border-slate-900"> --}}
                            {{-- @if(auth()->user()->profile_img) --}}
                            @if(auth()->user()->profile_img && file_exists(public_path('storage/' . auth()->user()->profile_img)))
                                <img src="{{ asset('storage/' . auth()->user()->profile_img) }}" alt="Profile Picture" class="w-96 h-96 object-cover object-center flex justify-center align-middle rounded-full mx-auto border-2 border-slate-900">
                            @else
                                <img src="{{ URL('user_images/default_user_icon.jpg') }}" alt="Profile Picture" class="w-96 h-96 object-cover rounded-full mx-auto border-2 border-slate-900">
                            @endif
                        </div>

                        <div>
                            <div class="space-y-4">
                                <div>
                                    <label for="name" class="block text-sm font-semibold text-gray-800">Firstname</label>
                                    <input type="text" id="firstname" name="firstname" value="{{ $user->firstname }}" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg" required>
                                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label for="name" class="block text-sm font-semibold text-gray-800">Lastname</label>
                                    <input type="text" id="lastname" name="lastname" value="{{ $user->lastname }}" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg" required>
                                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-semibold text-gray-800">Email</label>
                                    <input type="email" id="email" name="email" value="{{ $user->email }}" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg" required>
                                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label for="password" class="block text-sm font-semibold text-slate-300">Password</label>
                                    <input type="text" id="password" name="password" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg" disabled>
                                    @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label for="password_confirmation" class="block text-sm font-semibold text-slate-300">Confirm Password</label>
                                    <input type="text" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg" disabled>
                                    @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>

                                {{-- <div>
                                    <label for="bio" class="block text-sm font-semibold text-gray-800">Bio</label>
                                    <textarea id="bio" name="bio" rows="4" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg"></textarea>
                                </div> --}}

                                <div  class="overflow-hidden w-full">
                                    <label for="profile_img" class="block text-sm font-semibold text-gray-800">Choose / Edit Profile</label>
                                    <input type="file" id="profile_img" name="profile_img">
                                    @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                                {{-- IMAGE SECTION --}}
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end gap-5 mt-6">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Save Changes</button>
                    </div>
                </form>
                <button id="deleteButton" type="submit" class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition-all">Delete Profile Image</button>
            </div>
        </div>
        <div id="confirmModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
                <h2 class="font-bold mb-4">Profile Image Delete</h2>
                <p class="text-gray-700 mb-6">Do you really want to delete your profile?</p>
                <div class="flex justify-end space-x-4">
                    <button id="cancelButton" class="hover:text-slate-600">Cancel
                    </button>
                    <form action="{{ route('profile.delete-image') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700 transition-all">
                            Delete Image
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
