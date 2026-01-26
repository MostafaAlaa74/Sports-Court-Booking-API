<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Services\RegisterService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct(private RegisterService $registerService){}

    
    public function register(RegisterRequest $request){
        $validatedData = $request->validated();
        $response = $this->registerService->register($validatedData);
        return response()->json($response, 201);
    }
}
