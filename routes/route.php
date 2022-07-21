<?php

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\WelcomeController;
use App\Controllers\PortfoliosController;

SimpleRouter::get('/', [WelcomeController::class, 'welcome']);

SimpleRouter::get('/portfolios', [PortfoliosController::class, 'index']);
