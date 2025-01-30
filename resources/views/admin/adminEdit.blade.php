<x-layout>
    <header class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800 capitalize">Edit {{ $user->firstname }}</h1>
    </header>
    <div class="register-content h-lvh">
        <div class="register-form lg:w-3/12 md:w-1.5/3 sm:w-1/2 p-5 font-extralight border overflow-hidden pb-10">
            <p class="text-3xl">Register</p>
            <div class="form">
                <form action="{{ route('admin.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="input-form pt-5">
                        <input type="text" name="firstname" id="firstname" class="w-80 h-10 rounded-md px-5" placeholder="First Name" value="{{ $user->firstname }}">
                    </div>
                    <div class="input-form pt-5">
                        <input type="text" name="lastname" id="lastname" class="w-80 h-10 rounded-md px-5" placeholder="Last Name" value="{{ $user->lastname }}">
                    </div>
                    <div class="input-form pt-5">
                        <input type="email" name="email" id="email" class="w-80 h-10 rounded-md px-5" placeholder="Email" value="{{ $user->email }}">
                    </div>
                    {{-- <div class="input-form pt-5">
                        <input type="password" name="password" id="password" class="w-80 h-10 rounded-md px-5"  placeholder="Password">
                    </div>
                    <div class="input-form pt-5">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="w-80 h-10 rounded-md px-5" placeholder="Connfirm your password">
                    </div> --}}
                    <label for="usertype">Role: Make</label>
                    <select id="usertype" name="usertype" class="cursor-pointer" required>
                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                    </select>
                    {{-- register button --}}
                    <div class="input-form pt-5 flex-col">
                        <button type="submit" class="btn">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- DELETE MODAL --}}
        <div id="confirmModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
                <h2 class="font-bold mb-4">User Delete</h2>
                <p class="text-gray-700 mb-6">Do you really want to delete this user? This action cannot be undone.</p>
                <div class="flex justify-end space-x-4">
                    <button
                        id="cancelButton"
                        class="update-btn">Cancel
                    </button>
                    <form action="{{ route('admin.destroy', $user) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            type="submit"
                            class="text-red-500 hover:underline">
                            Delete User
                        </button>
                    </form>
                </div>
            </div>
        </div>
        {{-- DELETE MODAL --}}

        <div class="right-content lg:w-1/2 md:w-1/2 sm:w-1/3 border-t border-r border-b">
            <div class="container mx-auto p-6">
                <table class="min-w-full bg-white border">
                <thead class="bg-gray-200 text-gray-600 uppercase text-sm">
                    <tr>
                        <th class="py-3 px-4 text-left">Name</th>
                        <th class="py-3 px-4 text-left">Email</th>
                        <th class="py-3 px-4 text-left">Current Role</th>
                        <th class="py-3 px-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm">
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-3 px-4">{{ $user->firstname }}</td>
                            <td class="py-3 px-4">{{ $user->email }}</td>
                            <td class="py-3 px-4 capitalize pl-12">{{ $user->usertype }}</td>
                            <td class="py-3 px-4 text-center">
                                <button id="deleteButton" class="text-red-500 hover:underline">Delete User</button>
                            </td>
                        </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- ====================================================================================================== --}}

    <div class="container mx-auto p-6">
        <header class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Other Users</h1>
        </header>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full bg-white border">
                <thead class="bg-gray-200 text-gray-600 uppercase text-sm">
                    <tr>
                        <th class="py-3 px-4 text-left">#</th>
                        <th class="py-3 px-4 text-left">Name</th>
                        <th class="py-3 px-4 text-left">Email</th>
                        <th class="py-3 px-4 text-left">Role</th>
                        <th class="py-3 px-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm">
                    @foreach($users as $user)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4">{{ $user->firstname }}</td>
                            <td class="py-3 px-4">{{ $user->email }}</td>
                            <td class="py-3 px-4 capitalize">{{ $user->usertype }}</td>
                            <td class="py-3 px-4 text-center">
                                <a href="{{ route('admin.edit', $user) }}" class="text-blue-500 hover:underline">Edit</a> |
                                <form action="#" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
