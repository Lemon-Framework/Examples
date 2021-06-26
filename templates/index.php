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

require __DIR__ . "/../vendor/autoload.php";


/*
 *
 * Loading route files from routes folder
 *
 * */
loader(__DIR__);


/*
 *
 * Executing routes
 *
 * */
Route::execute();

?>
