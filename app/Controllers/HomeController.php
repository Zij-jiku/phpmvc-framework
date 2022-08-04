<?php


namespace App\Controllers;

use App\Base\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return views('backendHome.php');
    }
}
