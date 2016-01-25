<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 25/01/16
 * Time: 16:19
 */

namespace app\Repositories;


use App\User;

class UserRepository extends Repository
{
    function model()
    {
        return user::class;
    }
}