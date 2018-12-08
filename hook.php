<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '649987401:AAFcVQGzSenZ7OHUc5VWjuDlwYlCQdNz3BQ';
$bot_username = 'BeKre_bot';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    // echo $e->getMessage();
}