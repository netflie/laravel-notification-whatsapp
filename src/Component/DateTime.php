<?php

namespace NotificationChannels\WhatsApp\Component;

class DateTime extends Component
{
    public function __construct(protected \DateTimeImmutable $dateTime,protected string $format = 'Y-m-d H:i:s')
    {
    }

    public function toArray(): array
    {
        return [
            'type' => 'date_time',
            'date_time' => [
                'fallback_value' => $this->dateTime->format($this->format),
            ],
        ];
    }
}