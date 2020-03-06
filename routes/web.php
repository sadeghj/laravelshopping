<?php
use App\User;
use App\Roles;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/homepagesite',array('as'=>'homepage',function(){

    $url= route('homepage');
    return"<a href='$url'>test url link</a>";
    // if($id > 10)
    // echo "this page is home page $id";
    // else
    // echo "sorry";
}));

    // Route::get('alluserdatatabels', 'Admin\UserController@alluserdatatabels')->name('users.alluserdatatabels');
    // Route::resource('/admin/users', 'Admin\UserController');



// Route::get('/homesite',array('as'=>'homesitename',function(){

//     $url=Route('homesitename');
//     return "<a href='$url'>test url link</a>";
// }));





// Route::get('/homepage',array('as'=>'admintest'),function(){
//              return "test";
// });

Route::get('/user/roles/attach', function () {

    $user= User::find(2);
    $role= Roles::find(2);
        $user->Roles()->attach($role->id,['created_at'=>'2020-02-05 00:00:00']);

 });

//read role with user
Route::get('/user/{id}/roleread', function ($id) {
    $user=User::findOrFail($id);

    foreach($user->roles as $role){
        echo $role->name."<br>";
    }
});
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
//==============================================Admin start ========================

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::get('/homepage', 'HomepageController@Index')->name('homepage.index');
   // Route::get('/products/index', 'ProductController@Index')->name('products.index');
    Route::get('alluserdatatabels', 'UserController@alluserdatatabels')->name('users.alluserdatatabels');
    Route::resource('/users', 'UserController');
    Route::resource('/products', 'ProductController');

 });

 //==============================================Admin End==========================

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
