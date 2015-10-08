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
            //throw new \InvalidConfirmationCodeException;
        }

        $user = User::where('confirmation_code', $confirmation_code)->first();

        if ( ! $user)
        {
            //throw new \InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        return \Redirect::route('auth/login')->with('message', 'User is validated!');
    }
}
