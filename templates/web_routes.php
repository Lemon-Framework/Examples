<?php
/*
 *
 * Lemonade project->web routes basic file
 *
 * */


// Basic web page
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
