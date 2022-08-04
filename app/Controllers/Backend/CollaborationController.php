<?php

namespace App\Controllers\Backend;

use App\Base\Controller;

class CollaborationController extends Controller
{
    public function collaboration()
    {
        return views('backendPages/collaboration/index.php');
    }
}
