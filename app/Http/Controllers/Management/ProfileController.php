<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdatePasswordRequest;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Src\Repositories\Profile\ProfileRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profileRepository;

    function __construct(ProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    public function index()
    {
        $user = Auth::user();
        
        return view('management.profile.index', compact('user'));
    }


    public function updatePassword(UpdatePasswordRequest $request)
    {
        $response = $this->profileRepository->updatePassword();

        if ($response) return response()->json([
            'result' => true, 
            'redirect' => route('administracion.profile'),
            'message' => 'La contraseña ha sido actualizada correctamente.'
        ]);

        return response()->json(['result' => false]);
    }


    public function updateProfile(UpdateProfileRequest $request)
    {
        $response = $this->profileRepository->updateProfile();

        if ($response) return response()->json([
            'result' => true, 
            'redirect' => route('administracion.profile'),
            'message' => 'Tu perfil fue actualizado correctamente.'
        ]);

        return response()->json(['result' => false]);
    }
}
