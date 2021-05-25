<?php
/*
 *
 * Lemonade project->web routes basic file
 *
 * */
use Lemon\Routing\Route;

// Basic web page
Route::get('/', function() {
    echo "Welcome to Lemon!";
});

?>
