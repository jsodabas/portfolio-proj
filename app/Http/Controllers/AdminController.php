<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Http\Middleware\Admin;

class AdminController extends Controller
{
    public function index(User $user) {
        return view("admin.dashboard", ["user" => $user]);
    }

    public function showUsers() {
        $users = User::latest()->paginate(10);

        $admins = User::where('usertype', 'admin')->get();

        // Fetch regular users with pagination
        $regularUsers = User::where('usertype', 'user')->get();

        // Pass the data to the view
        return view('admin.manageUsers', [
            'users' => $users,
            'admins' => $admins,
            'regularUsers' => $regularUsers
        ]);

        // return view('admin.manageUsers', ["users" => $users]);
    }

    public function edit(User $user) {
        $users = User::latest()->paginate(10);
        return view('admin.adminEdit', ['user' => $user, 'users' => $users]);
        // return view('admin.adminEdit');
    }

    public function update(Request $request, User $user) {
        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'usertype' => $request->usertype,
        ]);

        return back()->with('success', 'User successfully updated');
    }

    public function destroy(User $user) {

        $user->delete();

        return route('admin.manageUsers')->with('success', "User Successfully Deleted");
    }
}
