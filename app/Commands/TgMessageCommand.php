<?php
namespace App\Commamd;

use App\Application;
use App\Telegram\TelegramApiImpl;

class TgMessageCommand extends Command{

    protected Application $app;

    public function __construct(Application $app) {
        $this->app = $app;
    }

    function run(array $options = []): void {
        $tgApi = new TelegramApiImpl($this->app->env('TELEGRAM_TOKEN'));
        echo json_encode($tgApi->getMessage(0));
    }
}