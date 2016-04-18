<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use app\Profile;
use Illuminate\Http\Request;
use App\CreadorDePerfilesHTML;
use App\CreadorDePerfilesJson;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{

    public function show(Profile $profile)
    {
        $creator = new CreadorDePerfilesHTML();
        return Auth::user()->profile($creator);
    }

}