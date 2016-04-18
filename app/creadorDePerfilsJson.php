<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 18/04/16
 * Time: 17:12
 */

namespace app;


class creadorDePerfilesJson implements Profile{

    public function show($user)
    {
        return "<JSON>
                ID: <b>".$this->getUserId($user)."</b><br>
                Name: ".$user->name."
                </JSON>";
    }

    protected function getUserId($user)
    {
        return $user->id;
    }
}