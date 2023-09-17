<?php

namespace App\Http\Controllers;

use App\Mail\SendContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Log;

class MainController extends Controller
{
    public function home(Request $req)
    {
        return view('pages.home');
    }

    // home style one
    public function homeStyeOne()
    {
        return view('pages.home-style-1');
    }

    // for contact us page
    public function connectUs()
    {
        return view('pages.contact');
    }

    // contact mail send
    public function contactDataStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'serviceType' => 'required',
            'phone' => 'required|min:10|max:10',
            'message' => 'required',
        ]);

        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "serviceType" => $request->serviceType,
            "phone" => $request->phone,
            "message" => $request->message,
        ];
        Log::info("data");
        Log::info($data);
        Mail::to('pawan@etechdreams.com')->send(new SendContactMail($data));
        return back();
    }
}
