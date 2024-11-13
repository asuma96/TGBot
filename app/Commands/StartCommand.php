<?php

namespace App\Commands;

use Telegram\Bot\Commands\Command;

class StartCommand extends Command
{
    protected string $name ='start';
    protected string $description = 'Запуск / Перезапуск бота';

    public function handle()
    {
        $this->replyWithMessage(
            [
                'text' => '123312 123312 оооо эттто же я',
                'parse_mode' => 'HTML',
            ]);
    }
}
