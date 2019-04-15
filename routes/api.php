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
    'contacts' => 'API\ContactController',
    'lessons' => 'API\LessonController',
    'orders' => 'API\OrderController',
    'payments' => 'API\PaymentController',
    'pre-registrations' => 'API\PreRegistrationController',
    'products' => 'API\ProductController',
    'registrations' => 'API\RegistrationController',
    'rooms' => 'API\RoomController',
    'seasons' => 'API\SeasonController',
    'teachers' => 'API\TeacherController',
]);
