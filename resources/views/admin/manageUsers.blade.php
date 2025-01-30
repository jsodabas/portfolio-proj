<x-layout>

    <div class="container mx-auto p-6">
        <header class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Admin's list</h1>
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
                    @foreach ($admins as $user)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4">{{ $user->firstname }}</td>
                            <td class="py-3 px-4">{{ $user->email }}</td>
                            <td class="py-3 px-4 capitalize">{{ $user->usertype }}</td>
                            <td class="py-3 px-4 text-center">
                                <a href="{{ route('admin.edit', $user) }}"
                                    class="text-blue-500 hover:underline">Edit</a> |
                                <button id="deleteButton" class="text-red-500 hover:underline">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- ALL USERS LISTED HERE --}}

    <div class="container mx-auto p-6">
        <header class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">All users list</h1>
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
                    @foreach ($users as $user)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4">{{ $user->firstname }}</td>
                            <td class="py-3 px-4">{{ $user->email }}</td>
                            <td class="py-3 px-4 capitalize">{{ $user->usertype }}</td>
                            <td class="py-3 px-4 text-center">
                                <a href="{{ route('admin.edit', $user) }}"
                                    class="text-blue-500 hover:underline">Edit</a> |
                                <button id="deleteButton" class="text-red-500 hover:underline">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- DELETE MODAL --}}
    <div id="confirmModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
            <h2 class="font-bold mb-4">User Delete</h2>
            <p class="text-gray-700 mb-6">Do you really want to delete this user? This action cannot be undone.</p>
            <div class="flex justify-end space-x-4">
                <button id="cancelButton" class="update-btn">Cancel
                </button>
                <form action="{{ route('admin.destroy', $user) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">
                        Delete User
                    </button>
                </form>
            </div>
        </div>
    </div>
    {{-- DELETE MODAL --}}

    <div class="m-10">
        {{ $users->links() }}
    </div>
</x-layout>
