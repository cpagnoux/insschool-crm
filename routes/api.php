<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'contacts' => 'Api\ContactController',
    'lessons' => 'Api\LessonController',
    'orders' => 'Api\OrderController',
    'payments' => 'Api\PaymentController',
    'pre-registrations' => 'Api\PreRegistrationController',
    'products' => 'Api\ProductController',
    'registrations' => 'Api\RegistrationController',
    'rooms' => 'Api\RoomController',
    'seasons' => 'Api\SeasonController',
    'teachers' => 'Api\TeacherController',
]);
