<?php
use App\Artist;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function()
{

 return view('welcome');

});

Route::get('/tambah', function(){
   $artist = new Artist;
   $artist->nama = 'Jason Mraz';
   $artist->asal = 'Inggris';
   
   $artist->save();
});

Route::get('/update', function(){
   $artist = Artist::find(1);
   $artist->nama = 'Ed Sheeran';
   $artist->asal = 'Britani Raya';
   
   $artist->save();
   
});

Route::get('/tampil', function(){
   $artist = Artist::all();
   echo '<ul>';
    foreach ($artist as $artist)
    {
        echo '<li>';
        echo 'Nama :';
        echo $artist->nama;
        echo "asal :";
        echo $artist->asal;
        echo "</li>";
    }
    echo "</ul>";
});
Route::get('/about', 'aboutController@index');

Route::get('/contact', 'testController@index');
//Route::get('/', 'WelcomeController@index');


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

