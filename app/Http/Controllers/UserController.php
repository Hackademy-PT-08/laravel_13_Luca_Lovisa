<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile () {

        $user_pictures = User::find(auth()->user()->id);



        return view ('user.profile', [
            'pictures' => $user_pictures->pictures
        ]);
    }


}
