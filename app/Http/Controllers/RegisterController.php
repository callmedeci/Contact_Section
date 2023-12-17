<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegisterPage()
    {
        return view('pages.contact-sales-register');
    }
}
