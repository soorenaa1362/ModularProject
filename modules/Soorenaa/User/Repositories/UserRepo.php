<?php

namespace Soorenaa\User\Repositories;

use Soorenaa\User\Models\User;

class UserRepo
{
    
    public function getTeachers()
    {
        return User::permission('teach')->get();
    }


    public function findById($id)
    {
        return User::find($id);
    }

}