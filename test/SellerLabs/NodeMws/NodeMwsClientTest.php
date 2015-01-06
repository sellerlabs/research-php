<?php

use SellerLabs\NodeMws\NodeMwsClient;

class NodeMwsClientTest extends PHPUnit_Framework_TestCase {

    public function testConstruct() {
        $clientId = 'BenjaminTest';
        $clientSecret = 'MySecretKeyIsSoGood';
        $baseUrl = 'http://localhost:1337';

        $client = new NodeMwsClient($clientId, $clientSecret, $baseUrl);

        $this->assertInstanceOf('\SellerLabs\NodeMws\NodeMwsClient', $client);
    }

    public function testGenerateCode() {

    }
}