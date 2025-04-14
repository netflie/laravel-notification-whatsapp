<?php

namespace NotificationChannels\WhatsApp\Test;

use NotificationChannels\WhatsApp\Component;
use PHPUnit\Framework\TestCase;

final class ComponentTest extends TestCase
{
    /** @test */
    public function it_can_return_a_currency_component()
    {
        $component = Component::currency(10, 'EUR');

        $this->assertInstanceOf(Component\Currency::class, $component);
    }

    /** @test */
    public function it_can_return_a_datetime_component()
    {
        $component = Component::dateTime(new \DateTimeImmutable());

        $this->assertInstanceOf(Component\DateTime::class, $component);
    }

    /** @test */
    public function it_can_return_a_document_component()
    {
        $component = Component::document('https://www.netflie.es/my_document.pdf');

        $this->assertInstanceOf(Component\Document::class, $component);
    }

    /** @test */
    public function it_can_return_an_image_component()
    {
        $component = Component::image('https://www.netflie.es/my_image.png');

        $this->assertInstanceOf(Component\Image::class, $component);
    }

    /** @test */
    public function it_can_return_a_text_component()
    {
        $component = Component::text('Hey there!');

        $this->assertInstanceOf(Component\Text::class, $component);
    }

    /** @test */
    public function it_can_return_a_video_component()
    {
        $component = Component::video('https://www.netflie.es/my_image.webm');

        $this->assertInstanceOf(Component\Video::class, $component);
    }

    /** @test */
    public function it_can_return_a_location_component()
    {
        $component = Component::location('My Place', 'Liepaja, Latvia', 56.51078, 21.00212);

        $this->assertInstanceOf(Component\Location::class, $component);
    }

    /** @test */
    public function it_can_return_a_url_button_component()
    {
        $component = Component::urlButton(['event/01']);

        $this->assertInstanceOf(Component\UrlButton::class, $component);
    }

    /** @test */
    public function it_can_return_a_quick_reply_button_component()
    {
        $component = Component::quickReplyButton(['Thanks for your message!']);

        $this->assertInstanceOf(Component\QuickReplyButton::class, $component);
    }

    /** @test */
    public function it_can_return_a_flow_reply_button_component()
    {
        $component = Component::flowButton('token', ['example' => 'test']);

        $this->assertInstanceOf(Component\FlowButton::class, $component);
    }
}
