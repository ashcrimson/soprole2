<?php

namespace App\Src\Repositories\Auth;

use App\Models\PasswordReset;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PasswordResetRepository{

    public function saveToken($request){

        try{
            
            $token = Str::random(80);

            $rest_code = new PasswordReset;
            $rest_code->email = $request->email;
            $rest_code->token = $token;
            $rest_code->created_at = now();
            $rest_code->updated_at = now();
            $rest_code->save();

            return $rest_code->token;

        }catch(\Exception $e){
            // dd($e->getMessage());
            Log::error($e->getMessage());
            return false;
        }
    }

    public function getUserByToken($request){

        $passwordReset = PasswordReset::where('token',$request->token)->firstOrFail();
       
        return $passwordReset;
    }


    public function delete($request){
        try{
            return  PasswordReset::where('email', $request->email)->delete();
        }catch(\Exception $e){
            return false;
        }
    }
    
}