<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[HomeController::class,'Home']);
Route::post('/search',[HomeController::class,'Search']);
Route::get('/',[HomeController::class,'AllBooks']);
Route::get('/end',[HomeController::class,'End']);
Route::get('/atm',[HomeController::class,'ATM']);
Route::get('/detail/{id}',[HomeController::class,'Details']);
Route::post('/addcart',[HomeController::class,'Addcart']);
Route::get('/shoppingcart',[HomeController::class,'Shoppingcart']);
Route::get('/delete_cart/{id}',[HomeController::class,'Deletecart']);
Route::get('/update_cart_up/{id}',[HomeController::class,'Updatecart_up']);
Route::get('/update_cart_down/{id}',[HomeController::class,'Updatecart_down']);
Route::get('/thanhtoan',[HomeController::class,'Thanhtoan']);
Route::get('/admin',[AdminController::class,'LoginAdmin']);
Route::get('/homeadmin',[AdminController::class,'HomeAdmin']);
Route::get('/addbook',[AdminController::class,'AddBook']);
Route::post('/add',[AdminController::class,'add']);
Route::get('/homeadmin',[AdminController::class,'AllBooks'])->middleware('condition');

Route::get('/updatebook/{id}',[AdminController::class,'Updatebook']);
Route::post('/deletebook',[AdminController::class,'delete']);
Route::post('/update/{id}',[AdminController::class,'update']);
Route::post('/shipping',[HomeController::class,'Shipping']);


Route::get('/truyentranh',[HomeController::class,'Truyentranh']);
Route::get('/sachthamkhao',[HomeController::class,'SachThamKhao']);
Route::get('/dungcuhoctap',[HomeController::class,'DungCuHocTap']);
Route::get('/dochoi',[HomeController::class,'DoChoi']);

Route::get('/manage_order',[AdminController::class,'Manage_order']);
Route::post('/manage_order_delete',[AdminController::class,'Manage_order_delete']);
Route::get('/view_order/{order_id}',[AdminController::class,'ViewOrder']);
Route::get('/manage_order_confirm/{order_id}',[AdminController::class,'Manage_order_confirm']);

//Login
Route::get('/login',[LoginController::class,'Login']);
Route::get('/layout_home',[LoginController::class,'Layout_home'])->middleware('condition');
Route::get('/logout',[LoginController::class,'Logout']);
Route::get('/register',[LoginController::class,'Register']);
Route::post('/add_register',[LoginController::class,'AddRegister']);
Route::post('/check_login',[LoginController::class,'CheckLogin']);
Route::post('/check_login_admin',[AdminController::class,'CheckLoginAdmin']);
Route::get('/logout_admin',[AdminController::class,'LogoutAdmin']);
Route::get('/history',[HomeController::class,'History']);
Route::get('/giamsatvanhanh',[HomeController::class,'Giamsatvanhanh']);
Route::get('/ketoannoibo',[HomeController::class,'Ketoannoibo']);
Route::get('/nhanvienkiemke',[HomeController::class,'Nhanvienkiemke']);
Route::get('/quanliquay',[HomeController::class,'Quanliquay']);
Route::get('/troligiamdoc',[HomeController::class,'Troligiamdoc']);
Route::get('/lienhe',[HomeController::class,'Lienhe']);
Route::get('/gioithieu',[HomeController::class,'Gioithieu']);


//Sendmail
Route::get('/sendmail',[AdminController::class,'Sendmail']);

//gio hang
Route::post('/update-cart', [HomeController::class, 'update']);
Route::post('/remove-session', [HomeController::class, 'remove']);


//import
// Route::post('/import-csv', [AdminController::class, 'import_csv']);
// Route::post('/export-csv', [AdminController::class, 'export_csv']);
