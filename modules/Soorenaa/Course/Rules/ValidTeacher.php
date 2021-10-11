<?php 
 
namespace Soorenaa\Course\Rules;

use Soorenaa\User\Repositories\UserRepo;
use Illuminate\Contracts\Validation\Rule;

class Validteacher implements Rule
{
    public function passes($attribute, $value)
    {
        $user = resolve(UserRepo::class)->findById($value);
        return $user->hasPermissionTo('teach');
    }

    public function message()
    {
        return "کاربر انتخاب شده یک مدرس معتبر نیست.";
    }
}