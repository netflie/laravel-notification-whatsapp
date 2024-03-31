<?php

namespace NotificationChannels\WhatsApp;

class WhatsAppTextMessage
{
    /**
     * WhatsApp ID or phone number for the person you want to send a message to.
     */
    protected string $to;

    /**
     * Message.
     */
    protected string $message;

    /**
     * The message type.
     */
    protected static string $type = 'text';

    protected function __construct($to = '', $message = '')
    {
        $this->to = $to;
        $this->message = $message;
    }

    public static function create($to = '', $message = ''): self
    {
        return new self($to, $message);
    }

    public function to(string $to): self
    {
        $this->to = $to;

        return $this;
    }

    public function message(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function recipient(): ?string
    {
        return $this->to;
    }

    public function hasRecipient(): bool
    {
        return ! empty($this->to);
    }

    public function type(): string
    {
        return self::$type;
    }
}
