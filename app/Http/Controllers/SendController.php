<?php

namespace App\Http\Controllers;

use App\Models\TelegramUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Laravel\Facades\Telegram;

class SendController extends Controller
{
    public function __construct(TelegramUser $telegramUser)
    {
        $this->telegramUser = $telegramUser;
    }
    public function send(Request $request)
    {

        dd(321,123);
    }
    public function start(Request $request)
    {
        return response('OK', 200);
    }
}
