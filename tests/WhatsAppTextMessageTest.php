<?php

namespace NotificationChannels\WhatsApp\Test;

use NotificationChannels\WhatsApp\WhatsAppTextMessage;
use PHPUnit\Framework\TestCase;

final class WhatsAppTextMessageTest extends TestCase
{
    /** @test */
    public function the_notification_recipient_can_be_set()
    {
        $message = WhatsAppTextMessage::create()
            ->to('346762014584');

        $this->assertEquals('346762014584', $message->recipient());
    }

    /** @test */
    public function the_notification_message_can_be_set()
    {
        $message = WhatsAppTextMessage::create()
            ->message('Hello, World!');

        $this->assertEquals('Hello, World!', $message->getMessage());
    }

    /** @test */
    public function it_can_check_if_a_recipient_is_set()
    {
        $message = WhatsAppTextMessage::create()
            ->to('346762014584');

        $this->assertTrue($message->hasRecipient());
    }

    /** @test */
    public function it_can_return_the_message_type()
    {
        $message = WhatsAppTextMessage::create();

        $this->assertEquals('text', $message->type());
    }
}