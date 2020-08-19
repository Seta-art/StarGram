<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($username)
    {
        $user=User::find($username);
        dd($user);
        return view('profiles.show');
    }
}
