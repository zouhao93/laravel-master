<?php
/**
 * Created by PhpStorm.
 * User: zouha
 * Date: 2015/11/2
 * Time: 21:07
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends MyController
{
    public function init()
    {
        return view('welcome/welcome');
    }
}