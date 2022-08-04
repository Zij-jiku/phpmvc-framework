<?php

namespace App\Controllers\Backend;

use App\Base\Controller;

class SkillsController extends Controller
{
    public function skills()
    {
        return views('backendPages/skill/index.php');
    }
}
