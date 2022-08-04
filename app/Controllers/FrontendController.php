<?php


namespace App\Controllers;

use App\Base\Controller;

class FrontendController extends Controller
{
    public function frontendHome()
    {
        return views('frontendPage.php');
    }

    public function loginPage()
    {
        return views('auth/login.php');
    }

    public function registerPage()
    {
        return views('auth/register.php');
    }
}
