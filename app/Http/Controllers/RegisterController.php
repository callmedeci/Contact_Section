<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegisterPage()
    {
        return view('pages.contact-sales-register');
    }
    public function handleRegister()
    {
        $validate = \request()->validate(
            [
                'first_name' => ['required', 'string', 'min:3', 'max:64'],
                'last_name' => ['required', 'string', 'min:3', 'max:64'],
                'company' => ['required', 'string'],
                'mobile' => ['required', 'string'],
                'message' => ['string'],
                'email' => ['string', 'email', 'required', 'unique:users,email'],
                'password' => ['required', 'string', 'confirmed', 'min:8', 'max:64'],
            ]
        );

        User::create(
            [
                'first_name'  => $validate['first_name'],
                'last_name'   => $validate['last_name'],
                'company'     => $validate['company'],
                'mobile'      => $validate['mobile'],
                'message'     => $validate['message'],
                'email'       => $validate['email'],
                'password'    => $validate['password'],
            ]
        );

        dd($validate);
    }
}
