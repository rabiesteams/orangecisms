<?php

namespace Rabiesteams\Orangecisms;


use GuzzleHttp\Client;

class OrangeciSms
{
    protected $client;
    protected $url;
    protected $clientId;
    protected $clientSecret;
    protected $senderName;

    public function __construct()
    {
        $this->client = new Client();
        $this->url = config('config.url');
        $this->clientId = config('config.client_id');
        $this->clientSecret = config('config.client_secret');
        $this->senderName = config('config.sender_name');
    }

    public function send($to, $message)
    {
        $response = $this->client->request('POST', $this->url, [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($this->clientId . ':' . $this->clientSecret),
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'json' => [
                'outboundSMSMessageRequest' => [
                    'address' => 'tel:+' . $to,
                    'senderAddress' => $this->senderName,
                    'outboundSMSTextMessage' => [
                        'message' => $message,
                    ],
                ],
            ],
        ]);

        return $response->getStatusCode() === 201;
    }
}
