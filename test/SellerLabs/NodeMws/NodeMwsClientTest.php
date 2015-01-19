<?php

use SellerLabs\NodeMws\NodeMwsClient;
use \Mockery;

class NodeMwsClientTest extends \PHPUnit_Framework_TestCase {

    protected $clientId;
    protected $clientSecret;
    protected $baseUrl;
    protected $guzzleClient;
    protected $client;

    public function setUp() {
        $this->clientId = 'BenjaminTest';
        $this->clientSecret = 'MySecretKeyIsSoGood';
        $this->baseUrl = 'http://localhost:1337';

        $guzzleMock = Mockery::mock('GuzzleHttp\Client');

        $guzzleMock
             ->shouldReceive('setDefaultOption')
             ->withArgs([
                 'headers/Authorization',
                 Mockery::type('string')
             ]);

        $this->guzzleClient = $guzzleMock;

        $this->client = new NodeMwsClient(
            $this->clientId,
            $this->clientSecret,
            $this->baseUrl,
            $this->guzzleClient
        );
    }

    public function tearDown() {
        Mockery::close();
    }

    public function testGenerateCode() {
        $code = $this->client->generateCode(1420583425);
        $this->assertEquals("1420583425|BenjaminTest|a4f22bc411408ba1f29edb6c1c89b7d6", $code);
    }

    public function testGetAsinCategories() {
        // TODO
//        $this->client->getAsinCategories('0452011876');
    }

    public function testGetCategoryById()
    {
        // TODO
//         var_dump($this->client->getCategoryById('10399'));
    }
}