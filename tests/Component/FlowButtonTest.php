<?php

namespace NotificationChannels\WhatsApp\Test\Component;

use NotificationChannels\WhatsApp\Component\FlowButton;
use NotificationChannels\WhatsApp\Component\UrlButton;
use PHPUnit\Framework\TestCase;

final class FlowButtonTest extends TestCase
{
    /** @test */
    public function flow_button_is_valid()
    {
        $button = new FlowButton('token', ['test' => 'example']);

        $expectedValue = [
            'type' => 'button',
            'sub_type' => 'flow',
            'index' => '0',
            'parameters' => [
                [
                    'type' => 'action',
                    'action' => [
                        'flow_token' => 'token',
                        'flow_action_data' => [
                            'test' => 'example'
                        ]
                    ]
                ]
            ],
        ];

        $this->assertEquals($expectedValue, $button->toArray());
    }
}
