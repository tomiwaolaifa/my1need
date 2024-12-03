<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailNotification;
use Illuminate\Http\Request;
use App\Models\Purpose;
use App\Models\User;
use App\Models\Solution;



class SolutionController extends Controller
{
    //
    public function solutions()
    {
        $posts = Purpose::with('user')->latest()->get();

        $posts->each(function ($post) {
            $post->total_solutions = $post->solutions->count();
        });

        return view('solutions', compact('posts'));
    }


    public function solution_confirm($id)
    {
        return view('solution_confirm', ['id' => $id]);
    }

    public function offers_confirm($id)
    {
        return view('confirm_offers', ['id' => $id]);
    }

    public function solve_need($id)
    {
        $need = Purpose::with('user')->findOrFail($id);
        $solutions = Solution::where('post_id', $id)->get();

        return view('solve_need', compact('need', 'id', 'solutions'));
    }


    public function offers_solve_need($id)
    {
        $need = Purpose::with('user')->findOrFail($id);
        $solutions = Solution::where('post_id', $id)->get();

        return view('offers_solve_need', compact('need', 'id', 'solutions'));
    }

    public function stay_anon(Request $request)
    {
        $postId = $request->route('id');
        
        $post = \App\Models\Purpose::findOrFail($postId);
        $senderUserId = $post->user_id;

        // dd($senderUserId);
        
        $senderUser = \App\Models\User::findOrFail($senderUserId);
        $senderEmail = $senderUser->email;

        // dd($senderEmail);

        Mail::to('order@my1need.com')->send(new SendMailNotification($senderEmail));

        return redirect()->route('offers_confirm', ['id' => $postId])->with('success', 'Email notification sent!');
    }

    public function solutions_store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|string',
        //     'description' => 'required|string',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'email' => 'required|email',
        //     'country' => 'required|string',
        // ]);

        $id = $request->route('id');

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            $user = User::create([
                'email' => $request->email,
                'country' => $request->country,
                'phone' => $request->phone,
                'position' => 'solution_provider',
            ]);
        } 


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }
    
        // Create solution
        $solution = Solution::create([
            'solution_description' => $request->input('solution_description'),
            'solution_image' => $imagePath,
            'user_id' => $user->id,
            'post_id' => $request->input('post_id'),
        ]);

        // return redirect()->route('solution_confirm')->with('success', 'Solution created successfully!');
        return redirect()->route('solution_confirm', ['id' => $id])->with('success', 'Solution created successfully!');

    }

}
