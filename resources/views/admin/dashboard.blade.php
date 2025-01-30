
<x-layout class="min-h-screen flex flex-col">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Admin Dashboard</h1>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto p-4">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Dashboard Overview</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Users Count Card -->
                <div class="bg-blue-500 text-white p-4 rounded-lg shadow">
                    <h3 class="text-lg font-medium">Total Users</h3>
                    <a href="{{ route('admin.manageUsers') }}" class="text-4xl font-bold">{{ $user->count() }}</a>
                </div>
            </div>
        </div>
    </main>
</x-layout>
