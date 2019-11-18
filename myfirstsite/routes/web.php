<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

// Route::get('/', function () {

//     /* $tasks = [
//         'Go to the store',
//         'Go to the market',
//         'Go to work'
//     ]; */

//     return view('welcome', [
//         'title' => 'Laravel',
//         'tasks' => [
//             'Go to the store',
//             'Go to the market',
//             'Go to work'
//         ]
//     ]);

//     /* return view('welcome')->with([
//         'tasks' => [
//             'Go to the store',
//             'Go to the market',
//             'Go to work'
//         ],
//         'title' => 'Laravel'
//     ]); */

//     // return view('welcome')->withTasks($tasks)->withTitle('Laravel');


//     /* return view('welcome', [
//         'title' => '<script>alert("Laravel")</script>',
//         'tasks' => $tasks
//     ]); */

// });

/* Route::get('/contact',function(){
    return view('contact');
});

Route::get('/about',function(){
    return view('about');
}); */
