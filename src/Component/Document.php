<?php

namespace NotificationChannels\WhatsApp\Component;

use NotificationChannels\WhatsApp\Exceptions\UnsupportedMediaValue;

class Document extends Component
{
    protected const SUPPORTED_EXTENSIONS = ['pdf'];

    /**
     * Link to the document; e.g. https://URL
     * Only PDF documents are supported.
     */
    protected string $link;

    /**
     * File name to be used for file.
     */
    protected string $filename;

    public function __construct(string $link, ?string $filename = null)
    {
        if (filter_var($link, FILTER_VALIDATE_URL) === false) {
            throw new UnsupportedMediaValue($link, 'document', 'Link is not a valid URL');
        }

        $extension = pathinfo($link, PATHINFO_EXTENSION);

        if (! in_array($extension, static::SUPPORTED_EXTENSIONS)) {
            throw new UnsupportedMediaValue($link, 'document', 'Only PDF documents are supported.');
        }

        $this->link = $link;
        $this->filename = empty($filename) ? 'document' : $filename;
    }

    public function toArray(): array
    {
        return [
            'type' => 'document',
            'document' => [
                'link' => $this->link,
                'filename' => $this->filename,
            ],
        ];
    }
}
