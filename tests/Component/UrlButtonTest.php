<?php

namespace NotificationChannels\WhatsApp\Test\Component;

use NotificationChannels\WhatsApp\Component\UrlButton;
use PHPUnit\Framework\TestCase;

final class UrlButtonTest extends TestCase
{
    /** @test */
    public function url_button_is_valid()
    {
        $button = new UrlButton(['event', '01']);
        $expectedValue = [
            'type' => 'button',
            'sub_type' => 'url',
            'index' => '0',
            'parameters' => [
                [
                    'type' => 'text',
                    'text' => 'event',
                ],
                [
                    'type' => 'text',
                    'text' => '01',
                ],
            ],
        ];

        $this->assertEquals($expectedValue, $button->toArray());
    }
}
