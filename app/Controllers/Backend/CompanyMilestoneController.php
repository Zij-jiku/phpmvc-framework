<?php

namespace App\Controllers\Backend;

use App\Base\Controller;

class CompanyMilestoneController extends Controller
{
    public function companyMilestone()
    {
        return views('backendPages/companyMilestone/index.php');
    }
}
