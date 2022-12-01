<?php

namespace App\Src\Repositories\Profile;

use App\Models\User;

interface ProfileRepositoryInterface{
    public function updatePassword();
    public function updateProfile();
}