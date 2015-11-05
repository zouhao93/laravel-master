<?php
/**
 * Created by PhpStorm.
 * User: zouha
 * Date: 2015/11/2
 * Time: 19:50
 */
namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\View;

/**
 * my base controller
 */
class FrontController extends Controller
{
    protected $_jsPath;
    protected $_cssPath;
    protected $_uri;
    protected $_action;
    protected $_controller;
    //init
    public function __construct(Route $route)
    {
        $this->_jsPath = JSDIR;
        $this->_cssPath = CSSDIR;
        $version = time();
        $this->_uri = $route->getUri();
        $controller_uri = explode('/', $this->_uri);
        $this->_controller = strtolower($controller_uri[0]);
        $this->_action = strtolower($controller_uri[1]);
        $this->share('controller', $this->_controller);
        $this->share('action', $this->_action);
        $this->share('version', $version);
        $this->share('jsPath', $this->_jsPath);
        $this->share('cssPath', $this->_cssPath);
    }

    //view::share data
    public function share($key, $data)
    {
        if(!empty($key))
        {
            View::share($key, $data);
        }
    }

    //view::with
    public function viewwith($blade, $data)
    {
        if(!empty($data) && !empty($blade)){
            if(is_array($data))
            {
               view($blade, $data);
            }
        }
    }
}