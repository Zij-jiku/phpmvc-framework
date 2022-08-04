<?php

namespace App\Controllers\Backend;

use App\Base\Controller;

class ContactInfoController extends Controller
{
    public function contactInfo()
    {
        return views('backendPages/contactInfo/index.php');
    }
}
