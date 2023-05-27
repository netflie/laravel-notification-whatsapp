<?php

namespace NotificationChannels\WhatsApp\Component;

abstract class Button extends Component
{
    protected string $sub_type = '';
    protected int $index = 0;
    protected array $parameters = [];

    public function toArray(): array
    {
        return [
            'type' => 'button',
            'sub_type' => $this->sub_type, // quick_reply|url
            'index' => '' . $this->index,
            'parameters' => $this->parameters
        ];
    }

    /**
     * From the API
     * Position index of the button.
     * You can have up to 3 buttons using index values of 0 to 2.
     *
     * We don't do the validation.
     * It's up to the user to follow this guideline
     */
    public function setIndex(int $index){
        $this->index = $index;
    }
}
