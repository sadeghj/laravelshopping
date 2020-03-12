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

// Route::get('/user/roles/attach', function () {

//     $user= User::find(2);
//     $role= Roles::find(2);
//         $user->Roles()->attach($role->id,['created_at'=>'2020-02-05 00:00:00']);

//  });

// //read role with user
// Route::get('/user/{id}/roleread', function ($id) {
//     $user=User::findOrFail($id);

//     foreach($user->roles as $role){
//         echo $role->name."<br>";
//     }
// });

/*
|--------------------------------------------------------------------------
|Start  FrontEnd
|--------------------------------------------------------------------------
|
| These Are User Interface  Routes
|
|
*/
Route::get('/homepagesite',array('as'=>'homepage',function(){

    $url= route('homepage');
    return"<a href='$url'>test url link</a>";
    // if($id > 10)
    // echo "this page is home page $id";
    // else
    // echo "sorry";
}));

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');


/*
|--------------------------------------------------------------------------
|End  FrontEnd
|--------------------------------------------------------------------------
|
| These Are User Interface  Routes
|
|
*/




/*
|--------------------------------------------------------------------------
|Start  Backend
|--------------------------------------------------------------------------
|
| These Are Admin Routes
|
|
*/


///==============================================Admin start ========================

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::get('/homepage', 'HomepageController@Index')->name('homepage.index');
   // Route::get('/products/index', 'ProductController@Index')->name('products.index');
    Route::get('alluserdatatabels', 'UserController@alluserdatatabels')->name('users.alluserdatatabels');
    Route::resource('/users', 'UserController');
    Route::resource('/products', 'ProductController');
    Route::resource('/categorys', 'CategorysController');

 });

 //==============================================Admin End==========================
//////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\END BACKEND\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/*
|--------------------------------------------------------------------------
|End  Backend
|--------------------------------------------------------------------------
|
|  These Are Admin Routes
|
|
*/

