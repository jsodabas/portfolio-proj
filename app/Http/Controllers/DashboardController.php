<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index() {
        $posts = Post::where('user_id', Auth::id())->get();
        return view('users.dashboard', ["posts" => $posts]);
    }

    public function dashboard() {
        return view('welcome');
    }

    public function userPosts(User $user) {
        $userPosts = $user->posts()->latest()->paginate(5);
        return view('users.posts', [
            "posts" => $userPosts,
            "user" => $user,
        ]);
    }

    public function show(User $user) {
        $user = Auth::user();
        return view('users.profile', ["user" => $user]);
    }

    public function aboutme() {
        return view('aboutme');
    }

    public function create() {
        $posts = Post::where('user_id', Auth::id())->orderBy('created_at', 'desc')->paginate(4);
        $users = User::query()
            ->orderByRaw("id = ? desc", [Auth::id()])
            ->latest()->get();
        $userResponsive = Auth::user();

        $user_profile_image = User::get('profile_img');

        return view('createPosts', ["posts" => $posts, "users" => $users, "userResponsive" => $userResponsive, "user_profile_image" => $user_profile_image]);
    }

    public function edit() {
        $user = auth()->user();
        return view('users.profile', compact('user'));
    }

    public function update(Request $request) {
        $fields = $request->validate([
            'firstname' => ['max:255'],
            'lastname' => ['max:255'],
            'profile_img' => ['nullable', 'file', 'max:4000', 'mimes:webp,png,jpg'],
            'email' => ['email', 'max:255'],
            // 'password' => ['confirmed'],
        ]);

        $user = auth()->user();

        if ($request->hasFile('profile_img')) {
            $file = $request->file('profile_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('profile_pictures', $fileName, 'public');

            if ($user->profile_img) {
                Storage::disk('public')->delete($user->profile_img);
            }
            $user->profile_img = $filePath;
            $user->save();
        }

        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            // 'password' => $request->password,
        ]);

        return redirect()->back()->with('success', 'Profile Succesfully Updated');
    }

    public function deleteProfileImage(User $user) {
        $user = auth()->user();

        if ($user->profile_img) {
            Storage::disk('public')->delete($user->profile_img);
            $user->profile_img = 'default_profile.webp';
            $user->save();
        }

        return redirect()->back()->with('failed', 'Profile image succesfully removed');
    }

    public function portfolio() {
        return view('portfolio');
    }
}
