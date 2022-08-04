<?php

namespace App\Controllers\Backend;

use App\Base\Controller;

class AboutMeController extends Controller
{
    public function about()
    {
        return views('backendPages/aboutMe/index.php');
    }
}
