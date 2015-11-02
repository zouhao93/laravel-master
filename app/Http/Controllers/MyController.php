<?php
/**
 * Created by PhpStorm.
 * User: zouha
 * Date: 2015/11/2
 * Time: 19:50
 */
namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\View;

/**
 * my base controller
 */
class MyController extends Controller
{
    protected $_jsPath;
    protected $_cssPath;
    //init
    public function __construct()
    {
        $this->_jsPath = JSDIR;
        $this->_cssPath = CSSDIR;
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