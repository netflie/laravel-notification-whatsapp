<?php

namespace NotificationChannels\WhatsApp\Component;

class UrlButton extends Button
{
    public function __construct(array $url_suffixes)
    {
        foreach ($url_suffixes as $url_suffix) {
            $this->parameters[] = [
                'type' => 'text',
                'text' => $url_suffix,
            ];
        }
    }

    public function subType(): string
    {
        return 'url';
    }
}
