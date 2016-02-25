<?php
/**
 * Created by PhpStorm.
 * User: biondo
 * Date: 18/02/16
 * Time: 23:27
 */

namespace CodeProject\OAuth;

use Illuminate\Support\Facades\Auth;

class PasswordGrantVerifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }
}