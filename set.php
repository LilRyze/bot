<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '649987401:AAFcVQGzSenZ7OHUc5VWjuDlwYlCQdNz3BQ';
$bot_username = 'BeKre_bot';
$hook_url     = 'https://be-kre-01-bot.herokuapp.com/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}