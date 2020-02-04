<?php


namespace Commands;


use IgorYuzkiv\TelegramBot\Command;
use IgorYuzkiv\TelegramBot\Dialog;

class DialogCommand extends Command
{
    public function execute()
    {

        $dialog = new Dialog($this->telegram, "stop_dialog");

        $data = [
            "chat_id" => $this->telegram->get_chat_id()
        ];

        $notice = $dialog->get_notice();
        if (!isset($notice['state'])) {
            $notice['state'] = 0;
        }

        switch ($notice['state']) {
            case 0:
                $data['text'] = "Enter your name:";

                if ($this->telegram->get_text() !== ""){
                    $notice['name'] = $this->telegram->get_text();
                    $notice['state'] += 1;
                }

                break;
            case 1:
                $data['text'] = "Enter your last name:";

                if ($this->telegram->get_text() !== ""){
                    $notice['last_name'] = $this->telegram->get_text();
                    $notice['state'] += 1;
                }
                break;
            case 2:
                $data['text'] = "Thank you :)";
                $dialog->inactive_dialog();
                break;
        }

        $this->sendMessage($data);
        $dialog->set_notice($notice);
    }
}