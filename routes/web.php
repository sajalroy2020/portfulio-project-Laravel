<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\HomeDashboardController;
use App\Http\Controllers\WorkDesignImgController;
use App\Http\Controllers\ServiceDashboardController;
use App\Http\Controllers\AboutExperience;
use App\Http\Controllers\AboutExperienceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/



Route::get('/', [pagesController::class, 'index'])->name('homepage');


Route::get('admin/dashboard', [HomeDashboardController::class, 'dashboard'])->name('dashboard');
Route::put('admin/dashboard/update', [HomeDashboardController::class, 'update'])->name('admin.dashboard.update');


Route::get('admin/dashboard_page/allService', [ServiceDashboardController::class, 'allService'])->name('admin.dashboard_page.allService');
Route::get('admin/dashboard_page/createService', [ServiceDashboardController::class, 'createService'])->name('admin.dashboard_page.createService');
Route::post('admin/dashboard_page/serviceStore', [ServiceDashboardController::class, 'serviceStore']);
Route::get('admin/dashboard_page/serviceEdit/{id}', [ServiceDashboardController::class, 'serviceEdit']);
Route::post('admin/dashboard_page/serviceUpdate/{id}', [ServiceDashboardController::class, 'serviceUpdate']);
Route::get('admin/dashboard_page/serviceDelete/{id}', [ServiceDashboardController::class, 'serviceDelete']);


Route::get('admin/works/design', [WorkDesignImgController::class, 'design'])->name('admin.works.design');
Route::post('admin/works/design/design_store', [WorkDesignImgController::class, 'design_store']);
Route::get('admin/works/design/design_edit/{id}', [WorkDesignImgController::class, 'design_edit']);
Route::put('admin/works/design/design_update/{id}', [WorkDesignImgController::class, 'design_update']);
Route::get('admin/works/design/design_delete/{id}', [WorkDesignImgController::class, 'design_delete']);


Route::get('admin/works/development', [WorkDesignImgController::class, 'development'])->name('admin.works.development');
Route::post('admin/works/design/development_store', [WorkDesignImgController::class, 'development_store']);
Route::get('admin/works/design/development_edit/{id}', [WorkDesignImgController::class, 'development_edit']);
Route::put('admin/works/design/development_update/{id}', [WorkDesignImgController::class, 'development_update']);
Route::get('admin/works/design/development_delete/{id}', [WorkDesignImgController::class, 'development_delete']);


Route::get('admin/works/marketing', [WorkDesignImgController::class, 'marketing'])->name('admin.works.marketing');
Route::post('admin/works/design/marketing_store', [WorkDesignImgController::class, 'marketing_store']);
Route::get('admin/works/design/marketing_edit/{id}', [WorkDesignImgController::class, 'marketing_edit']);
Route::put('admin/works/design/marketing_update/{id}', [WorkDesignImgController::class, 'marketing_update']);
Route::get('admin/works/design/marketing_delete/{id}', [WorkDesignImgController::class, 'marketing_delete']);


Route::get('admin/works/all-work', [WorkDesignImgController::class, 'all_work'])->name('admin.works.all-work');



Route::get('admin/dashboard_page/aboutExperience', [AboutExperienceController::class, 'aboutExperience']);
Route::put('admin/dashboard_page/aboutExperience_update', [AboutExperienceController::class, 'aboutExperience_update']);





Auth::routes();
Route::get('home', [HomeDashboardController::class, 'index'])->name('home');
