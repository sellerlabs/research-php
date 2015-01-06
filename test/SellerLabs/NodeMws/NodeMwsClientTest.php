<?php

use SellerLabs\NodeMws\NodeMwsClient;
use \Mockery;

class NodeMwsClientTest extends PHPUnit_Framework_TestCase {

    protected $clientId;
    protected $clientSecret;
    protected $baseUrl;
    protected $client;

    public function setUp() {
        $this->clientId = 'BenjaminTest';
        $this->clientSecret = 'MySecretKeyIsSoGood';
        $this->baseUrl = 'http://localhost:1337';

        $this->client = new NodeMwsClient($this->clientId, $this->clientSecret, $this->baseUrl);
    }

    public function tearDown() {
        Mockery::close();
    }

    public function testConstruct() {
        $this->assertInstanceOf('\SellerLabs\NodeMws\NodeMwsClient', $this->client);
    }

    public function testGenerateCode() {
        $code = $this->client->generateCode(1420583425);
        $this->assertEquals("1420583425|BenjaminTest|a4f22bc411408ba1f29edb6c1c89b7d6", $code);
    }

    public function testGetAsinCategories() {
        // TODO
        //$this->client->getAsinCategories('0452011876');
    }

    public function testGetCategoryById()
    {
        // TODO
        // var_dump($this->client->getCategoryById('10399'));
    }
}