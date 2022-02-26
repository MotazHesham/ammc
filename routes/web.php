<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Slider
    Route::delete('sliders/destroy', 'SliderController@massDestroy')->name('sliders.massDestroy');
    Route::post('sliders/media', 'SliderController@storeMedia')->name('sliders.storeMedia');
    Route::post('sliders/ckmedia', 'SliderController@storeCKEditorImages')->name('sliders.storeCKEditorImages');
    Route::resource('sliders', 'SliderController');

    // Services
    Route::delete('services/destroy', 'ServicesController@massDestroy')->name('services.massDestroy');
    Route::post('services/media', 'ServicesController@storeMedia')->name('services.storeMedia');
    Route::post('services/ckmedia', 'ServicesController@storeCKEditorImages')->name('services.storeCKEditorImages');
    Route::resource('services', 'ServicesController');

    // About Us
    Route::delete('aboutuses/destroy', 'AboutUsController@massDestroy')->name('aboutuses.massDestroy');
    Route::post('aboutuses/media', 'AboutUsController@storeMedia')->name('aboutuses.storeMedia');
    Route::post('aboutuses/ckmedia', 'AboutUsController@storeCKEditorImages')->name('aboutuses.storeCKEditorImages');
    Route::resource('aboutuses', 'AboutUsController');

    // Founder Info
    Route::delete('founder-infos/destroy', 'FounderInfoController@massDestroy')->name('founder-infos.massDestroy');
    Route::post('founder-infos/media', 'FounderInfoController@storeMedia')->name('founder-infos.storeMedia');
    Route::post('founder-infos/ckmedia', 'FounderInfoController@storeCKEditorImages')->name('founder-infos.storeCKEditorImages');
    Route::resource('founder-infos', 'FounderInfoController');

    // Founder Description
    Route::delete('founder-descriptions/destroy', 'FounderDescriptionController@massDestroy')->name('founder-descriptions.massDestroy');
    Route::resource('founder-descriptions', 'FounderDescriptionController');

    // Gallery
    Route::delete('galleries/destroy', 'GalleryController@massDestroy')->name('galleries.massDestroy');
    Route::post('galleries/media', 'GalleryController@storeMedia')->name('galleries.storeMedia');
    Route::post('galleries/ckmedia', 'GalleryController@storeCKEditorImages')->name('galleries.storeCKEditorImages');
    Route::resource('galleries', 'GalleryController');

    // News
    Route::delete('newss/destroy', 'NewsController@massDestroy')->name('newss.massDestroy');
    Route::post('newss/media', 'NewsController@storeMedia')->name('newss.storeMedia');
    Route::post('newss/ckmedia', 'NewsController@storeCKEditorImages')->name('newss.storeCKEditorImages');
    Route::resource('newss', 'NewsController');

    // Articles
    Route::delete('articles/destroy', 'ArticlesController@massDestroy')->name('articles.massDestroy');
    Route::post('articles/media', 'ArticlesController@storeMedia')->name('articles.storeMedia');
    Route::post('articles/ckmedia', 'ArticlesController@storeCKEditorImages')->name('articles.storeCKEditorImages');
    Route::resource('articles', 'ArticlesController');

    // Contact Us
    Route::delete('contactuses/destroy', 'ContactUsController@massDestroy')->name('contactuses.massDestroy');
    Route::resource('contactuses', 'ContactUsController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::get('user-alerts/read', 'UserAlertsController@read');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
