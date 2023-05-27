<?php

namespace NotificationChannels\WhatsApp\Component;

class UrlButton extends Button {

    public function __construct(array $url_suffixes)
    {
        $this->sub_type = 'url';
        foreach($url_suffixes as $url_suffix){
            $this->parameters[] = [
                'type' => 'text',
                'text' => $url_suffix
            ];
        }
    }
}
