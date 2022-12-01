<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotPassword;
use App\Http\Requests\Auth\RestorePasswordRequest;
use App\Mail\SendCodeResetPassword;
use App\Models\PasswordReset;
use App\Models\User;
use App\Src\Repositories\Auth\PasswordResetRepository;
use App\Src\Repositories\User\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class RestorePasswordController extends Controller
{
    private $userRepository;
    private $passwordResetRepository;

    function __construct(UserRepository $userRepository,PasswordResetRepository $passwordResetRepository)
    {
        $this->userRepository = $userRepository;
        $this->passwordResetRepository = $passwordResetRepository;
    }

    public function processForgotPassword(RestorePasswordRequest $request){
        
        try{
            
            PasswordReset::where('email', request('email'))->delete();
            
            $token = $this->passwordResetRepository->saveToken($request);

            $user = User::where('email', request('email'))->pluck('nombre')->firstOrFail();
            
            Mail::to(request('email'))->send(new SendCodeResetPassword($token, $user));

            return response()->json([
                'result'   => true,
                'message'  => 'Se ha enviado un correo a tu casilla.'  
            ]);

        }catch(\Exception $e){
            Log::error($e->getMessage());
            return false;
        }  
         
    }

    public function formForgotPassword(Request $request){

        $user = $this->passwordResetRepository->getUserByToken($request);
        
        return view('management.auth.forgot_password', compact('user'));
    }

    public function updateForgotPassword(ForgotPassword $request){
        
        $update_user = $this->userRepository->updateForgotPassword();

        if($update_user){
            
            PasswordReset::where('email', request('email'))->delete();

            return response([
                'result' => true,
                'redirect' => route('administracion.login'),
                'message' => 'La clave se ha actualizado correctamente.'
            ]);
        }

        return response([
            'result' => false,
            'message' => 'Ha ocurrido un error al actualizar los datos.'
        ]);
        
    }
}
