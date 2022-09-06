<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('pages/auth/login');

    }
    public function register()
    {
        return view('pages/auth/register');

    }
    public function recover_password()
    {
        return view('pages/auth/recover_password');

    }
}
