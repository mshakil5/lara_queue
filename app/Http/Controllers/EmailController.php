<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function emailSubmit(Request $request){
        
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now(),
        ]);
        
        return redirect()->route('admin.email')->with('success', 'New User Created Successfully!');

    } //End Method
}
