<?php

namespace App\Controllers\Backend;

use App\Base\Controller;

class ContactFormController extends Controller
{
    public function contactForm()
    {
        return views('backendPages/contactForm/index.php');
    }
}
