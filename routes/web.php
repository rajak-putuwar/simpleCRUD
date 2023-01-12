<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,NoticeController,ParticipateController};
use GuzzleHttp\Middleware;

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
Route::get('/',function(){

    return redirect()->route('login');
});

Route::get('/dashboard', [NoticeController::class,'index'])->name('dashboard')->middleware('auth');

Route::get('/admin_check',function(){
    echo "you are not eligible to access this page</br>";
    echo '<a href="/dashboard">return to dashboard</a>';
});

Route::group(['middleware'=>['admin']],function()
{

    Route::get('/admin/{id}/edit', [NoticeController::class,'edit']);

    Route::post('/admin/{id}/edit', [NoticeController::class,'update']);

    Route::get('/admin/{id}/delete', [NoticeController::class,'destroy']);

    Route::post('/admin',[NoticeController::class,'store']);

    Route::get('/admin/add-notice',function(){
        return view('admin.form');
    });

    Route::get('/admin/datas',[NoticeController::class,'admin'])->name('admin/datas');
    Route::get('/admin/trash',[NoticeController::class,'trash']);
    Route::get('/admin/{id}/permanent-delete',[NoticeController::class,'permanentDelete']);

});





