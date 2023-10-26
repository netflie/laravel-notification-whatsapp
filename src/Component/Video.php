<?php

namespace NotificationChannels\WhatsApp\Component;

class Video extends Component
{
    /**
     * @param string $link
     * Link to the video; e.g. https://URL.
     */

    public function __construct(protected string $link)
    {
    }

    public function toArray(): array
    {
        return [
            'type' => 'video',
            'video' => [
                'link' => $this->link,
            ],
        ];
    }
}