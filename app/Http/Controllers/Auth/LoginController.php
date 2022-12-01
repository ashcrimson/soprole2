<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Src\Repositories\Auth\LoginRepository;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $loginRepository;

    function __construct(LoginRepository $loginRepository)
    {
        $this->loginRepository = $loginRepository;
    }

    public function processLogin(LoginRequest $request)
    {
        return $this->loginRepository->processLogin();
    }

    public function logout()
    {
        return $this->loginRepository->handleLogout();
    }

}
