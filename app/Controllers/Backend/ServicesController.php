<?php

namespace App\Controllers\Backend;

use App\Base\Controller;

class ServicesController extends Controller
{
    public function services()
    {
        return views('backendPages/service/index.php');
    }
}
