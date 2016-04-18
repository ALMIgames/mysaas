<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 18/04/16
 * Time: 16:58
 */

namespace app;


class creadorDePerfilesHTML implements Profile
{
    public function show($user)
    {
        return "<div>
                ID: <b>".$user->id."</b><br>
                Name: ".$user->name."
                </div>";
    }
}