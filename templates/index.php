<?php

/**
 *
 * Lemonade project->public folder
 *
 * This file registers all routes and executes them.
 *
 * In this folder is started Lemonade development server
 *
 */

require __DIR__ . "/../vendor/autoload.php";

ViewCompiler::setDirectory(__DIR__."/../views");

/**
 *
 * Loading route files from routes folder
 *
 */
loader(__DIR__."/../routes");


/**
 *
 * Executing routes
 *
 */
Route::execute();

?>
