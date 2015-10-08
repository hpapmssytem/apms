<?php

namespace apms\Http\Controllers;

use Illuminate\Http\Request;
use apms\Http\Requests;
use apms\Http\Controllers\Controller;

use apms\User;

class RegistrationController extends Controller
{
    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            return redirect()->to('auth/login')->with('alertMessage', 'The link is invaid');
        }

        $user = User::where('confirmation_code', $confirmation_code)->first();

        if ( ! $user)
        {
            return redirect()->to('auth/login')->with('alertMessage', 'No such user exists!');
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        return redirect()->to('auth/login')->with('message', 'User is validated!');
    }
}
