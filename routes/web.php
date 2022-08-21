<?php

use App\Models\User;
use App\Models\Work;
use App\Models\Service;
use App\Models\ServiceCat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userServiceProvider\WorkController;
use App\Http\Controllers\userServiceProvider\ServicesController;

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

Route::get('/test', function () {

    return view('test', ['id' => 3]);

// );
});
Route::get('/test1', function () {
    $services = Service::where('user_id', Auth::id())->get();

    $work = Work::CheckOwner()->findOrFail(2);
    return view('testu', [
            'services' => $services,
            'work' => $work
        ]

    );
});
Route::get('/test2', function () {
    $category = ServiceCat::find(3);
    return view('tests', [
            'category' => $category
        ]

    );

});
Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', function () {
    return view('user.profile');
})->name('profile')->middleware('auth');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/l/l', function () {
    return view('admin.categories');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/account', function () {
        return view('user.account');
    })->name('account');

    Route::get('/security', function () {
        return view('user.security');
    });
});

// start routes of user that provide service
Route::group(['prefix' => 'serviceProvider', 'middleware' => 'checkType:serviceProvider'], function () {

    Route::get('/', [ServicesController::class, 'index'])->name('serviceProvider.home');

    //crud category of service
    Route::group(['prefix' => 'service'], function () {
        Route::get('/', [ServicesController::class, 'index'])->name('service');
        Route::get('/create', [ServicesController::class, 'create'])->name('service.create');
        Route::post('/store', [ServicesController::class, 'store'])->name('service.store');
        Route::get('/edit/{id}', [ServicesController::class, 'edit'])->name('service.edit');
        Route::post('/update/{id}', [ServicesController::class, 'update'])->name('service.update');

    });

    // crud work
    Route::group(['prefix' => 'work'], function () {
        Route::get('/', [WorkController::class, 'index'])->name('work');
        Route::get('/create', [WorkController::class, 'create'])->name('work.create');
        Route::post('/store', [WorkController::class, 'store'])->name('work.store');
        Route::get('/edit/{id}', [WorkController::class, 'edit'])->name('work.edit');
        Route::post('/update/{id}', [WorkController::class, 'update'])->name('work.update');
    });


});

// start routes of user that provide service
Route::group(['prefix' => 'admin', 'middleware' => 'checkType:admin'], function () {

});

// start routes of account settings
Route::group(['prefix' => 'account'], function () {
    Route::get('/personal', function () {
        return view('account.person');
    })->name('account_personal');

    Route::get('/security', function () {
        return view('account.security');
    })->name('account_security');

    Route::get('/services', function () {
        return view('account.services');
    })->name('account_services');

    Route::get('/social', function () {
        return view('account.social');
    })->name('account_social');
});
