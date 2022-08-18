<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dmin\AdminController;
use App\Http\Controllers\admin\ServiceCategory;

// admin
    Route::group(['middleware' => 'checkType:admin'], function () {

        Route::get('/', [AdminController::class, 'index'])->name('admin.home');

                //crud category of service
                Route::group(['prefix' => 'category'], function () {
                    Route::get('/', [ServiceCategory::class, 'index'])->name('categories');
                    Route::get('/create', [ServiceCategory::class, 'create'])->name('category.create');
                    Route::post('/store', [ServiceCategory::class, 'store'])->name('category.store');
                    Route::get('/edit/{id}', [ServiceCategory::class, 'edit'])->name('category.edit');
                    Route::post('/update/{id}', [ServiceCategory::class, 'update'])->name('category.update');
        
                });


        // Setting Routs
        Route::group(['prefix' => 'settings'], function () {

            Route::get('/city', [CityController::class, 'create'])->name('add-city');
            Route::post('/city/store', [CityController::class, 'store'])->name('store-city');
            Route::get('/city/edit/{id}', [CityController::class, 'edit'])->name('edit-city');
            Route::post('/city/update/{id}', [CityController::class, 'update'])->name('update-city');
            Route::get('/city/active/{id}', [CityController::class, 'active'])->name('active.city');

            Route::get('/state', [GovernorateController::class, 'create'])->name('add-state');
            Route::post('/state/store', [GovernorateController::class, 'store'])->name('store-state');
            Route::get('/state/edit/{id}', [GovernorateController::class, 'edit'])->name('edit-state');
            Route::post('/state/update/{id}', [GovernorateController::class, 'update'])->name('update-state');
            Route::get('/state/active/{id}', [GovernorateController::class, 'active'])->name('active.state');

        });




        //crud advertisement
        Route::group(['prefix' => 'advertisement'], function () {
            Route::get('/index', [AdvertisementController::class, 'index'])->name('show.adv');
            Route::get('/edit/{id}', [AdvertisementController::class, 'edit'])->name('edit.adv');
            Route::post('/update/{id}', [AdvertisementController::class, 'update'])->name('update.adv');
            Route::post('/save', [AdvertisementController::class, 'store'])->name('save.adv');
            Route::get('/add', [AdvertisementController::class, 'create'])->name('add.adv');
            Route::get('/delete/{id}', [AdvertisementController::class, 'delete'])->name('delete.adv');
            Route::get('/active/{id}', [AdvertisementController::class, 'active'])->name('active.adv');

        });





    });
// end dashboard