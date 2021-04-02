<?php


class Websocket
{
    /**
     * @var string $address
     */
    public $address;

    /**
     * @var int $port
     */
    public $port;

    private $client;


    public function __construct($address = '0.0.0.0', $port = 12345 )
    {
        $this->address = $address;
        $this->port = $port;
    }

    public function run(){
        $this->client = $this->server();
    }

    public function sendMessage(){

    }
}