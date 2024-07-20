<?php

namespace NotificationChannels\WhatsApp\Component;

class Location extends Component
{
    protected string $name;
    protected string $address;
    protected float $latitude;
    protected float $longitude;

    public function __construct(string $name, string $address, float $latitude, float $longitude)
    {
        $this->name = $name;
        $this->address = $address;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function toArray(): array
    {
        return [
            'type' => 'location',
            'location' => [
                'latitude' => (string) $this->latitude,
                'longitude' => (string) $this->longitude,
                'name' => $this->name,
                'address' => $this->address,
            ],
        ];
    }
}
