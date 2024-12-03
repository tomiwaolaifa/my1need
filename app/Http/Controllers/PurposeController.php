<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purpose;
use App\Models\Solution;
use App\Models\User;

class PurposeController extends Controller
{
    public function create()
    {
        return view('needs');
    }

    public function create_offers()
    {
        return view('offers');
    }

    public function needs_confirm()
    {
        return view('needs_confirm');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|string',
        //     'description' => 'required|string',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'email' => 'required|email',
        //     'country' => 'required|string',
        // ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            $user = User::create([
                'email' => $request->email,
                'country' => $request->country,
                // 'phone' => $request->phone,
            ]);
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }
    
        // Create purpose
        $purpose = Purpose::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $imagePath,
            'user_id' => $user->id,
        ]);

        return redirect()->route('needs_confirm')->with('success', 'Purpose created successfully!');
    }

    public function search_needs(Request $request)
    {

        $request->validate([
            'needs_email' => 'required|email',
        ]);

        $email = $request->input('needs_email');

        if (!User::where('email', $email)->exists()) {
            return redirect()->back()->with('error', 'Email Not Found! Verify or Post new #1need.');
        }

        $solutions = Purpose::whereHas('user', function ($query) use ($email) {
            $query->where('email', $email);
        })->get();


        $solutions->each(function ($solutions) {
            $solutions->total_solutions = $solutions->solutions->count();
        });
        
    
        return view('offers_search_results', compact('solutions'));

        // dd($solutions);
        
    }
}
