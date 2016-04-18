<?php

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
        return $profile->show(Auth::user());
//        $creator = new CreadorDePerfilesHTML();
//        return Auth::user()->profile($creator);
    }

}