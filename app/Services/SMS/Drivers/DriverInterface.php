<?php

namespace App\Services\SMS\Drivers;

use App\Services\SMS\Message;

interface DriverInterface
{
    /**
     * Sends a SMS message
     *
     * @param App\Services\SMS\Message @messasge
     * @return void
     */
    public function send(Message $message);
}
