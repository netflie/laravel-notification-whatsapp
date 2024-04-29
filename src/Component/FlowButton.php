<?php

namespace NotificationChannels\WhatsApp\Component;

class FlowButton extends Button
{
    public function __construct(?string $token, array $data)
    {
        $this->parameters[] = [
            'type' => 'action',
            'action' => [
                'flow_token' => $token,
                'flow_action_data' => $data,
            ],
        ];
    }

    public function subType(): string
    {
        return 'flow';
    }
}
