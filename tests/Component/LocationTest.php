<?php

namespace NotificationChannels\WhatsApp\Test\Component;

use NotificationChannels\WhatsApp\Component\Location;
use PHPUnit\Framework\TestCase;

final class LocationTest extends TestCase
{
    /** @test */
    public function location_is_valid()
    {
        $name = 'name';
        $address = 'address';
        $latitude = 1.234567;
        $longitude = 7.891011;

        $currency = new Location($name, $address, $latitude, $longitude);
        $expectedValue = [
            'type' => 'location',
            'location' => [
                'latitude' => (string)$latitude,
                'longitude' => (string)$longitude,
                'name' => $name,
                'address' => $address,
            ],
        ];
        $this->assertEquals($expectedValue, $currency->toArray());
    }
}
