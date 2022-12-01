<?php

namespace App\Src\Repositories\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginRepository
{
    public function processLogin()
    {
        $credentials = array_merge(['email' => request('email'), 'password' => request('password')], ['estado' => 1]);

        try{
            if (Auth::attempt($credentials)) return $this->handleAuth();

            return $this->handleErrorCredentials();
            
        }catch(\Exception $e){
            dd($e->getMessage());
            Log::error($e->getMessage());
            return response()->json(['result' => false, 'message' => 'Ha ocurrido un error inesperado.']);
        }
        
    }

    public function handleLogout()
    {
        Auth::logout();
        return redirect()->route('administracion.login');
    }

    function handleAuth()
    {
        return response()->json([
            'result' => true,
            'redirect' => route('administracion.index')
        ]);
    }

    function handleErrorCredentials()
    {
        return response()->json(['result' => false, 'message' => 'Credenciales incorrectas.']);
    }

}
