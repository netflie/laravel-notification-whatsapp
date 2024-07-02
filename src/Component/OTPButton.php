<?php

namespace NotificationChannels\WhatsApp\Component;

class OTPButton extends Button
{
    public function __construct(?string $code)
    {
        $this->parameters[] = [
            'type' => 'otp',
            'text' => $code 
        ];
    }

    public function subType(): string
    {
        return 'otp';
    }
}
