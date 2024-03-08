<?php

namespace NotificationChannels\WhatsApp\Component;

class QuickReplyButton extends Button
{
    public function __construct(array $payloads)
    {
        foreach ($payloads as $payload) {
            $this->parameters[] = [
                'type' => 'payload',
                'payload' => $payload,
            ];
        }
    }

    public function subType(): string
    {
        return 'quick_reply';
    }
}
