<?php

namespace App\Controllers\Backend;

use App\Base\Controller;

class TestimonialController extends Controller
{
    public function testimonial()
    {
        return views('backendPages/testimonial/index.php');
    }
}
