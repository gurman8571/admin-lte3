<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfessionalController;
use App\Http\Controllers\Admin\EventController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']],function ()
{
    Route::view('/dashboard','Admin.Dashboard')->name('Admin.Dashboard');


    Route::group(['prefix' => 'Professionals'],function ()
    {
       Route::get('/add', [ProfessionalController::class, 'add'])->name('professional.add');
       Route::get('/index', [ProfessionalController::class, 'index'])->name('professional.index');
       Route::post('/create', [ProfessionalController::class, 'create'])->name('professional.create');
       Route::post('/update', [ProfessionalController::class, 'update'])->name('professional.update');
       Route::get('/details/{id}', [ProfessionalController::class, 'Detail'])->name('professional.details');
       Route::get('/Delete/{id}', [ProfessionalController::class, 'Delete'])->name('professional.Delete');
       Route::get('/status/update/{id}', [ProfessionalController::class, 'update_status'])->name('professional.status');
       Route::get('/status/update/{id}', [ProfessionalController::class, 'update_status'])->name('professional.status');
       Route::post('/add/skill', [ProfessionalController::class, 'add_skill'])->name('Profession.add_skill');
       Route::get('/Delete/skill/{professional_id}/{skill_id}', [ProfessionalController::class, 'Delete_skill'])->name('professional.skill.Delete');
       Route::post('/upload/image', [ProfessionalController::class, 'upload_images'])->name('Professional.images');
       Route::get('/Delete/image/{id}', [ProfessionalController::class, 'Delete_image'])->name('Professional.image.delete');


    });


    Route::group(['prefix' => 'Events'],function ()
    {
       Route::get('/add', [EventController::class, 'add'])->name('Event.add');
       Route::get('/index',   [EventController::class, 'index'])->name('Event.index');
       Route::post('/create', [EventController::class, 'create'])->name('Event.create');
       Route::get('/Delete/{id}',  [EventController::class, 'Delete'])->name('Event.Delete');

    });

     Route::get('event/list',  [EventController::class, 'event_list'])->name('Event.List');
     Route::get('event/list/add', [EventController::class, 'Eventlist_add'])->name('EventList.add');
     Route::post('event/list/create', [EventController::class, 'Eventlist_Create'])->name('EventList.create');



});
