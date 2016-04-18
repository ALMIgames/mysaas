<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{

    public function show()
    {
        $creator = new CreadorDePerfilesHTML();
        return Auth::user()->profile($creator);
    }

    public function showJson()
    {
        $creator = new CreadorDePerfilesJson();
        return Auth::user()->profile($creator);
    }
}