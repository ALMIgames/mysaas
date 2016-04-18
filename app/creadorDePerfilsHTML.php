<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 18/04/16
 * Time: 16:58
 */

namespace app;


class creadorDePerfilesHTML extends AbstractProfiler
{
    public function show($user)
    {
        return "<div>
                ID: <b>".$this->getUserId($user)."</b><br>
                Name: ".$user->name."
                </div>";
    }


}