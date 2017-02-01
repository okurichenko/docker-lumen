<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/books', function () use ($app) {
    return [ 'books' => [
    	[
	      'id' => 1,
	      'title' => 'Lord of the Rings',
	      'author' => 'J. R. R. Tolkien',
	      'year' => 1954,
	      'page_count' => 936
    	],
    	[
	      'id' => 2,
	      'title' => 'Harry Potter and the Philosopher\'s Stone',
	      'author' => 'J. K. Rowling',
	      'year' => 1997,
	      'page_count' => 623
    	],
    	[
	      'id' => 3,
	      'title' => 'The Godfather',
	      'author' => 'Mario Puzo',
	      'year' => 1969,
	      'page_count' => 430
    	],
    	[
	      'id' => 4,
	      'title' => 'A Song of Ice and Fire',
	      'author' => 'George R. R. Martin',
	      'year' => 1996,
	      'page_count' => 754
    	],
    ]];
});
