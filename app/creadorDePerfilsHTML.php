<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 18/04/16
 * Time: 16:58
 */

namespace app;


class creadorDePerfilsHTML
{
    public function show()
    {
        return "<div>
                ID: <b>".$this->id."</b><br>
                Name: ".$this->name."
                </div>";
    }
}