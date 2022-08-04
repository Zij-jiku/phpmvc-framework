<?php

namespace App\Controllers\Backend;

use App\Base\Controller;

class BannerController extends Controller
{
    public function bannerView()
    {
        return views('backendPages/banner/index.php');
    }
}
