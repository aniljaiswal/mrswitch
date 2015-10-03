<?php

namespace App\Services\SMS\Drivers;

use GuzzleHttp\Client;
use App\Services\SMS\Message;

class MvayooSMS extends AbstractSMS implements DriverInterface
{

    /**
     * The Guzzle HTTP Client
     *
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * The API's URL.
     *
     * @var string
     */
    protected $apiBase = 'http://api.mVaayoo.com';

    /**
     * Constructs a new instance.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Sends an SMS message.
     *
     * @param Message $message
     * @return Guzzle\ResponseInterface
     */
    public function send(Message $message)
    {
        $composedMessage = $message->composeMessage();
        $data = [
            'user' => config('sms.mvayoo.username') . ':' . config('sms.mvayoo.password'),
            'senderID' => 'TEST SMS',
            'recipientno' => implode(',', $message->getTo()),
            'msgtxt' => $composedMessage,
            'dsc' => 0,
            'state' => 4
        ];
        $this->buildCall('/mvaayooapi/MessageCompose');
        $this->buildBody($data);
        $this->getRequest();
    }

}
