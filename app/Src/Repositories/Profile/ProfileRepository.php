<?php

namespace App\Src\Repositories\Profile;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileRepository implements ProfileRepositoryInterface{

    public function updatePassword()
    {
        try {

            DB::beginTransaction();

            $user = User::where('id', auth()->user()->id)->firstOrFail();

            if (request('new_password')) {
                $user->password = Hash::make(request('new_password'));
            }

            $user->update();

            DB::commit();

            return true;

        } catch (\Exception $e) {

            DB::rollback();
            
            return false;
        }
    }

    public function updateProfile()
    {
        try {

            DB::beginTransaction();

            $user = User::where('id', auth()->user()->id)->firstOrFail();

            $user->update(request()->all());
            
            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            return false;
        }
    }
}