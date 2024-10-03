<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Mail\AdminMail;
use App\Mail\UserMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function emailSubmit(Request $request){
        
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now(),
        ]);

        // Mail::to($request->email)->send(new UserMail($request));

        dispatch(new SendMailJob((object)$request->all()));
        
        return redirect()->route('admin.email')->with('success', 'New User Created Successfully!');

    } //End Method
}
