<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Http\Responses\RegisterResponse;
use Illuminate\Auth\Events\Registered;


class RegisterController extends Controller
{
    //variable global
    public $guard;
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    public function store(Request $request,CreatesNewUsers $create)
    {
        event(new Registered($user = $create->create($request->all())));
        $this->guard->login($user);
        // return app(RegisterResponse::class);
        return view('layouts.pago');
    }

    public function create(){
        return view('auth.register-fotografo');
    }
}
