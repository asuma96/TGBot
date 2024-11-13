<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*Route::post('/webhook',function (){
    return response('OK', 200);
});
Route::get('/send',function (){
    $token = "7535914693:AAENMVaRqdbjJL353Q9WmGIGU5rOrE673uk";
    $chatId = 445374290;
    $text = "по русски шаришь?";
    $data = http_build_query([
        'text' => $text,
        'chat_id' => $chatId
    ]);
    $url = "https://api.telegram.org/bot$token/sendMessage?{$data}";
    file_get_contents($url);

    return response('OK', 200);
});*/
/*Route::post('/webhook', [\App\Http\Controllers\SendController::class, 'start']);*/
Route::get('/send', [\App\Http\Controllers\SendController::class, 'send']);
Route::post('/webhook', \App\Http\Controllers\WebhookController::class);

