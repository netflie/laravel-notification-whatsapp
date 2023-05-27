<?php

namespace NotificationChannels\WhatsApp\Component;

class QuickReplyButton extends Button {

    public function __construct(array $payloads)
    {
        $this->sub_type = 'quick_reply';
        foreach($payloads as $payload){
            $this->parameters[] = [
                'type' => 'payload',
                'payload' => $payload
            ];
        }
    }
}
