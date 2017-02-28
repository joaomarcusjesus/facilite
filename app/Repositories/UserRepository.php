<?php
/**
 * Created by PhpStorm.
 * User: João Marcus
 * Date: 27/02/2017
 * Time: 20:42
 */

namespace App\Repositories;

use App\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function create(array $data)
    {
        $insert = $this->user->create($data);
        if ($insert):
            return redirect()->route('login');
        else:
            return redirect()->back();
        endif;
    }
}