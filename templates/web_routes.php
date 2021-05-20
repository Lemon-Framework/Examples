<?php
/*
 *
 * Lemonade project->web routes basic file
 *
 * */
require "../lemon/framework.php";

/*
 *
 * Basic main page
 *
 * */
Route::get('/', function() {
    echo "Welcome to Lemon!";
});

/*
 *
 * Web routes
 *
 * Variable to get all routes in variable to register in public folder
 *
 * */
$web_routes = Route::getRoutes();

?>
