<?php

namespace NotificationChannels\WhatsApp\Test\Component;

use NotificationChannels\WhatsApp\Component\OTPButton;
use PHPUnit\Framework\TestCase;

final class OTPButtonTest extends TestCase
{
    /** @test */
    public function otp_button_is_valid()
    {
        $button = new OTPButton('000000');

        $expectedValue = [
            'type' => 'button',
            'sub_type' => 'copy_code',
            'index' => '0',
            'parameters' => [
                [
                    'type' => 'otp',
                    'text' => '000000',
                ],
            ],
        ];

        $this->assertEquals($expectedValue, $button->toArray());
    }
}
