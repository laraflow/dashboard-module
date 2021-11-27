<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('dashboard.dashboard', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Dashboard', route('dashboard.dashboard'));
});

/****************************************** System Logs ******************************************/
/*Breadcrumbs::for('system.logs', function (BreadcrumbTrail $trail) {
    $trail->parent('system.');
    $trail->push('Logs', route('system.logs'));
});*/
