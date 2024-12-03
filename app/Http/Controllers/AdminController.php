<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Purpose;
use App\Models\Solution;

class AdminController extends Controller
{
    //
    public function index()
    {
        $users = User::whereDoesntHave('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();

        $admin = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->first();


        $posts = Purpose::with('user')->get();

        $solutions = Solution::with(['user', 'purpose'])->get();

        $totalPosts = number_format($posts->count());

        $totalSolutions = number_format($solutions->count());

        $totalContacts = number_format($users->count());
        
        $posts->each(function ($post) {
            $post->total_solutions = $post->solutions->count();
        });

        return view('home', compact('users', 'totalContacts', 'admin', 'posts', 'solutions','totalSolutions', 'totalPosts'));
    }



}
