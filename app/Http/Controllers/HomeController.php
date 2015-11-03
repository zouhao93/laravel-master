<?php
/**
 * Created by PhpStorm.
 * User: zouha
 * Date: 2015/11/2
 * Time: 21:07
 */
namespace App\Http\Controllers;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\View;

class HomeController extends FrontController
{
    public function init(Route $route)
    {
        $this->share('loadScript', true);
        return view('welcome/welcome');
    }
}