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
require __DIR__ . "/../routes/web.php";

use Lemon\Routing\Route;

/*
 *
 * Registering routes from routes file
 *
 * To register from other files, you need to require that file and type same method with different variable name
 *
 * */
Route::registerRoutes($web_routes);

/*
 *
 * Executing routes
 *
 * */
Route::execute();

?>
