<?php

namespace Soorenaa\User\Repositories;

use Soorenaa\User\Models\User;

class UserRepo
{
    
    public function getTeachers()
    {
        return User::permission('teach')->get();
    }

}