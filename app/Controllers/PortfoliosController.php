<?php

namespace App\Controllers;

use Pecee\Http\Request;
use App\Base\Controller;
use App\Models\Portfolio;

class PortfoliosController extends Controller
{
    public function index()
    {
        $portfolio  = new Portfolio();
        $status     = isset($_GET['status']) ? intval($_GET['status']) : 1;
        $portfolios = $portfolio->get($status);
        return views('portfolios/index.php', compact('portfolios'));
    }

    public function storeData()
    {
        $data = [
            'title'     => $_POST['title'],
            'description' => $_POST['description'],
            'status'    => 1
        ];

        $portfolio = new Portfolio();
        $portfolio->create($data);
    }

    public function deleteData(int $id)
    {
        $portfolio = new Portfolio();
        $portfolio->deleteById($id);
    }
}
