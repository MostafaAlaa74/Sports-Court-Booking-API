<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct(private LoginService $loginService){}

    public function login(LoginRequest $request){
        $validatedDate = $request->validated();
        return $this->loginService->login($validatedDate) ;

    }
}
