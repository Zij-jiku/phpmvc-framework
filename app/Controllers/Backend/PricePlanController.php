<?php

namespace App\Controllers\Backend;

use App\Base\Controller;

class PricePlanController extends Controller
{
    public function pricePlan()
    {
        return views('backendPages/pricePlan/index.php');
    }
}
