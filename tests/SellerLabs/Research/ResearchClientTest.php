<?php

namespace Tests\SellerLabs\Research;

use GuzzleHttp\Client;
use Mockery;
use Mockery\MockInterface;
use SellerLabs\Research\ResearchClient;
use SellerLabs\Research\Responses\FeesResponse;
use SellerLabs\Research\Responses\GetAsinCategoriesResponse;
use SellerLabs\Research\Responses\GetCategoryByIdResponse;
use SellerLabs\Research\Responses\ItemSearchResponse;
use SellerLabs\Research\Responses\OffersResponse;
use SellerLabs\Research\Responses\SearchResponse;
use Tests\SellerLabs\Support\MockResponsesTrait;
use Tests\SellerLabs\Support\TestCase;

/**
 * Class ResearchClientTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\Research
 */
class ResearchClientTest extends TestCase
{
    use MockResponsesTrait;

    /**
     * @var string
     */
    protected $clientId;

    /**
     * @var string
     */
    protected $clientSecret;

    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        $this->clientId = 'BenjaminTest';
        $this->clientSecret = 'MySecretKeyIsSoGood';
        $this->baseUrl = 'http://localhost:1337';
    }

    public function testGenerateCode()
    {

        $code = $this->makeClient()->generateCode(1420583425);
        $this->assertEquals(
            "1420583425|BenjaminTest|a4f22bc411408ba1f29edb6c1c89b7d6",
            $code
        );
    }

    /**
     * Make an instance of the ResearchClient.
     *
     * @param Client|null $mockClient
     *
     * @return ResearchClient
     */
    protected function makeClient(Client $mockClient = null)
    {
        $client = new ResearchClient(
            $this->clientId,
            $this->clientSecret,
            $this->baseUrl
        );

        if ($mockClient !== null) {
            $client->setClient($mockClient);
        }

        return $client;
    }

    public function testConstructor()
    {
        $this->makeClient();
    }

    public function testGetOffers()
    {
        $guzzleMock = $this->makeGuzzleMock();
        $guzzleMock->shouldReceive('get')
            ->with('/v1/offers/0452011876',
                [
                    'query' => ['format' => 'pretty'],
                ]
            )
            ->once()
            ->andReturn($this->makeResponse(
                dirname(__FILE__)
                . '/Responses/Resources/OffersResponse.json'
            ));

        $result = $this->makeClient($guzzleMock)->getOffers('0452011876');

        $this->assertInstanceOf(OffersResponse::class, $result);
    }

    /**
     * @return MockInterface
     */
    protected function makeGuzzleMock()
    {
        return Mockery::mock(Client::class);
    }

    public function testGetOffersWithNoPaapi()
    {
        $guzzleMock = $this->makeGuzzleMock();
        $guzzleMock->shouldReceive('get')
            ->with('/v1/offers/0452011876',
                [
                    'query' => [
                        'format' => 'pretty',
                        'nopaapi' => true,
                    ],
                ]
            )
            ->once()
            ->andReturn($this->makeResponse(
                dirname(__FILE__)
                . '/Responses/Resources/OffersResponse.json'
            ));

        $result = $this->makeClient($guzzleMock)
            ->getOffers('0452011876', true);

        $this->assertInstanceOf(OffersResponse::class, $result);
    }

    public function testGetSearch()
    {
        $guzzleMock = $this->makeGuzzleMock();
        $guzzleMock->shouldReceive('get')
            ->with('/v1/search',
                [
                    'query' => [
                        'asin' => '0452011876',
                        'format' => 'pretty',
                    ],
                ]
            )
            ->once()
            ->andReturn($this->makeResponse(
                dirname(__FILE__)
                . '/Responses/Resources/SearchResponse.json'
            ));

        $result = $this->makeClient($guzzleMock)
            ->getSearch('asin', '0452011876');

        $this->assertInstanceOf(SearchResponse::class, $result);
    }

    public function testGetFees()
    {
        $guzzleMock = $this->makeGuzzleMock();
        $guzzleMock->shouldReceive('get')
            ->with('/v1/fees/0452011876',
                [
                    'query' => ['price' => 9.0],
                ]
            )
            ->once()
            ->andReturn($this->makeResponse(
                dirname(__FILE__)
                . '/Responses/Resources/FeesResponse.json'
            ));

        $result = $this->makeClient($guzzleMock)->getFees('0452011876', 9.0);

        $this->assertInstanceOf(FeesResponse::class, $result);
    }

    public function testGetAsinCategories()
    {
        $guzzleMock = $this->makeGuzzleMock();
        $guzzleMock->shouldReceive('get')
            ->with('/v1/getAsinCategories/0452011876')
            ->once()
            ->andReturn($this->makeResponse(
                dirname(__FILE__)
                . '/Responses/Resources/GetAsinCategoriesResponse.json'
            ));

        $result = $this->makeClient($guzzleMock)
            ->getAsinCategories('0452011876');

        $this->assertInstanceOf(GetAsinCategoriesResponse::class, $result);
    }

    public function testGetCategoryById()
    {
        $guzzleMock = $this->makeGuzzleMock();
        $guzzleMock->shouldReceive('get')
            ->with('/v1/getCategoryById/10399')
            ->once()
            ->andReturn($this->makeResponse(
                dirname(__FILE__)
                . '/Responses/Resources/GetAsinCategoriesResponse.json'
            ));

        $result = $this->makeClient($guzzleMock)->getCategoryById('10399');

        $this->assertInstanceOf(GetCategoryByIdResponse::class, $result);
    }

    public function testGetItemSearch()
    {
        $guzzleMock = $this->makeGuzzleMock();
        $guzzleMock->shouldReceive('get')
            ->withArgs(
                [
                    '/v1/itemSearch',
                    [
                        'query' => [
                            'keywords' => 'some keywords',
                            'page' => 1,
                            'searchIndex' => 'BogusIndex',
                        ],
                    ],
                ]
            )
            ->once()
            ->andReturn($this->makeResponse(
                dirname(__FILE__)
                . '/Responses/Resources/ItemSearchResponse.json'
            ));

        $result = $this->makeClient($guzzleMock)->getItemSearch(
            'some keywords',
            1,
            'BogusIndex'
        );

        $this->assertInstanceOf(ItemSearchResponse::class, $result);
    }
}
