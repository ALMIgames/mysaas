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
        return "Aqui un json";
    }
}