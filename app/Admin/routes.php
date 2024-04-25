<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('page-designer', PageDesignerController::class);
$router->resource('page-designer-images', PageDesignerImagesController::class);
$router->resource('page-designer-videos', PageDesignerVideoController::class);
$router->resource('page-designer-texts', PageDesignerTextController::class);
$router->resource('page-designer-inline-galleries', PageDesignerInlineGalleryController::class);
$router->resource('page-designer-embeds', PageDesignerEmbedController::class);
    $router->resource('projects', projectsController::class);
    $router->resource('students', StudentController::class);
    $router->resource('users', UserController::class);
    $router->resource('houses', HouseController::class);
    $router->resource('products', ProductController::class);
    $router->resource('chart-datas', ChartController::class);
    $router->resource('messages', messagesController::class);
    $router->resource('ombas', OmbaController::class);
    $router->resource('yetus', yetuController::class);

});
