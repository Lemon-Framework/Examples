<?php

/*
 *
 * Lemonade project->public folder
 *
 * This file registers all routes and executes them.
 *
 * In this folder is started Lemonade development server
 *
 * */

require __DIR__ . "/../lemon/framework.php";
require __DIR__ . "/../lemon/kernel/loader.php";

use Lemon\Routing\Route;
use Lemon\Kernel;

/*
 *
 * Loading route files from routes folder
 *
 * */
Lemon\Kernel\loader();


/*
 *
 * Executing routes
 *
 * */
Route::execute();

?>
