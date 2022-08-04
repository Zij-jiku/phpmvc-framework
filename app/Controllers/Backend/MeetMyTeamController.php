<?php

namespace App\Controllers\Backend;

use App\Base\Controller;

class MeetMyTeamController extends Controller
{
    public function meetMyTeam()
    {
        return views('backendPages/meetMyTeam/index.php');
    }
}
