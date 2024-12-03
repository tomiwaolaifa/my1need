<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waitlist;


class WaitlistController extends Controller
{

    public function join()
    {
        return view('waitlist');
    }

    public function waitlist_confirm()
    {
        return view('confirm_waitlist');
    }


    public function join_waitlist(Request $request)
    {
    
        // Create solution
        $waitlist = Waitlist::create([
            'email' => $request->waitlist_email,
        ]);

        return redirect()->route('waitlist_confirm')->with('success', 'Added to Waitlist Successfully!');

    }

}
