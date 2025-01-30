@props(["users" => $users])

<div class="user-list">
    <div class="flex justify-center align-middle text-center">
        {{ $users->email }} <span class="text-gray-800"> | </span> {{ $users->firstname }}
    </div>
    <div class="user-action">
        <button class="hover:text-gray-600"><a href="#">Update @if ($users->usertype == 'admin')
        Admin
        @else
        User
        @endif</a></button>
        <button class="hover:text-red-600"><a href="#">Delete User</a></button>
    </div>
</div>
