<?php

namespace App\Controllers\Backend;

use App\Base\Controller;

class FooterSocialIconController extends Controller
{
    public function footerSocialIcon()
    {
        return views('backendPages/footerSocialIcon/index.php');
    }
}
