<?php

namespace NotificationChannels\WhatsApp\Test\Component;

use NotificationChannels\WhatsApp\Component\QuickReplyButton;
use PHPUnit\Framework\TestCase;

final class QuickReplyButtonTest extends TestCase
{
    /** @test */
    public function quick_reply_button_is_valid()
    {
        $button = new QuickReplyButton(['Thanks for your message!', 'We will reply shortly']);
        $expectedValue = [
            'type' => 'button',
            'sub_type' => 'quick_reply',
            'index' => '0',
            'parameters' => [
                [
                    'type' => 'payload',
                    'payload' => 'Thanks for your message!',
                ],
                [
                    'type' => 'payload',
                    'payload' => 'We will reply shortly',
                ],
            ],
        ];

        $this->assertEquals($expectedValue, $button->toArray());
    }
}
