<?php

namespace Tests\SellerLabs\Research;

use GuzzleHttp\Url;
use Mockery;
use SellerLabs\Research\ResearchClient;
use Tests\SellerLabs\Support\MockResponsesTrait;
use Tests\SellerLabs\Support\TestCase;

/**
 * Class ResearchClientTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\NodeMws
 */
class ResearchClientTest extends TestCase
{
    use MockResponsesTrait;

    protected $clientId;
    protected $clientSecret;
    protected $baseUrl;
    protected $guzzleClient;
    protected $client;

    public function setUp()
    {
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

        $this->client = new ResearchClient(
            $this->clientId,
            $this->clientSecret,
            $this->baseUrl,
            $this->guzzleClient
        );
    }

    public function testGenerateCode()
    {
        $code = $this->client->generateCode(1420583425);
        $this->assertEquals(
            "1420583425|BenjaminTest|a4f22bc411408ba1f29edb6c1c89b7d6",
            $code
        );
    }

    public function testConstructor()
    {
        new ResearchClient(
            $this->clientId,
            $this->clientSecret,
            $this->baseUrl
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testConstructorWithInvalid()
    {
        new ResearchClient(
            $this->clientId,
            $this->clientSecret,
            null
        );
    }

    public function testGetOffers()
    {
        $guzzleMock = clone $this->guzzleClient;
        $guzzleMock->shouldReceive('get')
            ->with(Mockery::on(function ($value) {
                return $value instanceof Url &&
                $value->getPath() == '/v1/offers/0452011876' &&
                $value->getQuery()->get('format') == 'pretty';
            }))
            ->once()
            ->andReturn($this->makeResponse(
                dirname(__FILE__) . '/../NodeMws' .
                '/Responses/Resources/OffersResponse.json'
            ));

        $client = new ResearchClient(
            $this->clientId,
            $this->clientSecret,
            $this->baseUrl,
            $guzzleMock
        );

        $result = $client->getOffers('0452011876');

        $this->assertInstanceOf(
            'SellerLabs\NodeMws\Responses\OffersResponse',
            $result
        );
    }

    public function testGetOffersWithNoPaapi()
    {
        $guzzleMock = clone $this->guzzleClient;
        $guzzleMock->shouldReceive('get')
            ->with(Mockery::on(function ($value) {
                return $value instanceof Url &&
                $value->getPath() == '/v1/offers/0452011876' &&
                $value->getQuery()->get('format') == 'pretty' &&
                $value->getQuery()->get('nopaapi') == 'true';
            }))
            ->once()
            ->andReturn($this->makeResponse(
                dirname(__FILE__) . '/../NodeMws' .
                '/Responses/Resources/OffersResponse.json'
            ));

        $client = new ResearchClient(
            $this->clientId,
            $this->clientSecret,
            $this->baseUrl,
            $guzzleMock
        );

        $result = $client->getOffers('0452011876', true);

        $this->assertInstanceOf(
            'SellerLabs\NodeMws\Responses\OffersResponse',
            $result
        );
    }

    public function testGetSearch()
    {
        $guzzleMock = clone $this->guzzleClient;
        $guzzleMock->shouldReceive('get')
            ->with(Mockery::on(function ($value) {
                return $value instanceof Url &&
                $value->getPath() == '/v1/search' &&
                $value->getQuery()->get('asin') == '0452011876' &&
                $value->getQuery()->get('format') == 'pretty';
            }))
            ->once()
            ->andReturn($this->makeResponse(
                dirname(__FILE__) . '/../NodeMws' .
                '/Responses/Resources/SearchResponse.json'
            ));

        $client = new ResearchClient(
            $this->clientId,
            $this->clientSecret,
            $this->baseUrl,
            $guzzleMock
        );

        $result = $client->getSearch('asin', '0452011876');

        $this->assertInstanceOf(
            'SellerLabs\NodeMws\Responses\SearchResponse',
            $result
        );
    }

    public function testGetFees()
    {
        $guzzleMock = clone $this->guzzleClient;
        $guzzleMock->shouldReceive('get')
            ->with(Mockery::on(function ($value) {
                return $value instanceof Url &&
                $value->getPath() == '/v1/fees/0452011876' &&
                $value->getQuery()->get('price') == '9.0';
            }))
            ->once()
            ->andReturn($this->makeResponse(
                dirname(__FILE__) . '/../NodeMws' .
                '/Responses/Resources/FeesResponse.json'
            ));

        $client = new ResearchClient(
            $this->clientId,
            $this->clientSecret,
            $this->baseUrl,
            $guzzleMock
        );

        $result = $client->getFees('0452011876', 9.0);

        $this->assertInstanceOf(
            'SellerLabs\NodeMws\Responses\FeesResponse',
            $result
        );
    }

    public function testGetAsinCategories()
    {
        $guzzleMock = clone $this->guzzleClient;
        $guzzleMock->shouldReceive('get')
            ->with('/v1/getAsinCategories/0452011876')
            ->once()
            ->andReturn($this->makeResponse(
                dirname(__FILE__) . '/../NodeMws' .
                '/Responses/Resources/GetAsinCategoriesResponse.json'
            ));

        $client = new ResearchClient(
            $this->clientId,
            $this->clientSecret,
            $this->baseUrl,
            $guzzleMock
        );

        $result = $client->getAsinCategories('0452011876');

        $this->assertInstanceOf(
            'SellerLabs\NodeMws\Responses\GetAsinCategoriesResponse',
            $result
        );
    }

    public function testGetCategoryById()
    {
        $guzzleMock = clone $this->guzzleClient;
        $guzzleMock->shouldReceive('get')
            ->with('/v1/getCategoryById/10399')
            ->once()
            ->andReturn($this->makeResponse(
                dirname(__FILE__) . '/../NodeMws' .
                '/Responses/Resources/GetAsinCategoriesResponse.json'
            ));

        $client = new ResearchClient(
            $this->clientId,
            $this->clientSecret,
            $this->baseUrl,
            $guzzleMock
        );

        $result = $client->getCategoryById('10399');

        $this->assertInstanceOf(
            'SellerLabs\NodeMws\Responses\GetCategoryByIdResponse',
            $result
        );
    }
}
