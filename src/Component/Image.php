<?php

namespace NotificationChannels\WhatsApp\Component;

class Image extends Component
{
    /**
     * @param string $link
     * Link to the image; e.g. https://URL.
     */
    public function __construct(protected string $link)
    {
    }

    public function toArray(): array
    {
        return [
            'type' => 'image',
            'image' => [
                'link' => $this->link,
            ],
        ];
    }
}