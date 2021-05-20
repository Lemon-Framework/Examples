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

require "../lemon/framework.php";
require "../routes/web.php";

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
