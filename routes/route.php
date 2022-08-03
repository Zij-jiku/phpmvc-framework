<?php

use App\Base\Router;
use App\Controllers\WelcomeController;
use App\Controllers\PortfoliosController;

Router::get('/', [WelcomeController::class, 'welcome']);
Router::get('portfolios', [PortfoliosController::class, 'index']);
Router::post('portfolios', [PortfoliosController::class, 'storeData']);
Router::get('portfolios/{id}', [PortfoliosController::class, 'deleteData']);
