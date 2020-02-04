<?php

namespace Commands;

class StartCommand extends \IgorYuzkiv\TelegramBot\Command
{
    public function execute()
    {
        $data = [
            'chat_id' => $this->telegram->get_chat_id(),
            "text" => "Welcome"
        ];

        $this->sendMessage($data);
    }
}