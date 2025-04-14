<?php

namespace NotificationChannels\WhatsApp;

class Component
{
    /**
     * Currency code as defined in ISO 4217.
     */
    public static function currency(float $amount, string $code = 'EUR'): Component\Currency
    {
        return new Component\Currency($amount, $code);
    }

    public static function dateTime(\DateTimeImmutable $dateTime, string $format = 'Y-m-d H:i:s'): Component\DateTime
    {
        return new Component\DateTime($dateTime, $format);
    }

    public static function document(string $link, ?string $filename = null): Component\Document
    {
        return new Component\Document($link, $filename);
    }

    public static function image(string $link): Component\Image
    {
        return new Component\Image($link);
    }

    public static function text(string $text): Component\Text
    {
        return new Component\Text($text);
    }

    public static function video(string $link): Component\Video
    {
        return new Component\Video($link);
    }

    public static function urlButton(array $urls): Component\UrlButton
    {
        return new Component\UrlButton($urls);
    }

    public static function quickReplyButton(array $payloads): Component\QuickReplyButton
    {
        return new Component\QuickReplyButton($payloads);
    }

    public static function flowButton(string $token, array $data): Component\FlowButton
    {
        return new Component\FlowButton($token, $data);
    }

    public static function location(string $name, string $address, float $latitude, float $longitude): Component\Location
    {
        return new Component\Location($name, $address, $latitude, $longitude);
    }
}
