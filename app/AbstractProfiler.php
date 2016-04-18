<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 18/04/16
 * Time: 17:31
 */

namespace app;


abstract class AbstractProfiler implements Profile
{

    abstract public function show($user);

    protected function getUserId($user)
    {
        return $user->id;
    }

}