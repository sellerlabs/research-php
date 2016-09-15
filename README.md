# research-php ![Build Status](https://travis-ci.org/sellerlabs/research-php.svg?branch=master)

This is the official PHP client library for SellerLabs' research API service
_(Previously known as NodeMWS/ModernMWS client)_.

## Requirements

- PHP +5.6 or HHVM +3.6.
- Composer and `autoload.php`.
- and of course: credentials to use the research service.

## Documentation

- API documentation for the Research Service is available at:
https://docs.sellerlabs.com/research/
- Documentation for this library is available under the `docs` directory in this
  repository, and can be viewed online at
  [http://sellerlabs.github.io/research-php/](http://sellerlabs.github.io/research-php/)

## Installation & usage

### Using composer:

First, add the package to your `composer.json`:

```php
    // ...
    "require": {
        "sellerlabs/research-php": "*"
    }
    // ...
```

Then run `composer update`

### How to use with Laravel 5:

First you need to configure the client inside your app service provider:

```php
public function register()
{
    $this->app->bind(
        SellerLabs\Research\Interfaces\ResearchClientInterface::class,
        function () {
            return new ResearchClient(
                'YourClientId',
                'YourClientSecret',
                'http://research.api.sellerlabs.com'
            );
        }
    );
}
```

Then inside any of your controllers, you can inject the dependency through the
constructor:

```php
// ...
class ProductsController extends Controller
{
    /**
     * Implementation of a client for SellerLabs' research API
     *
     * @var ResearchClientInterface
     */
    protected $researchClient;

    /**
     * Construct an instance of a ProductsController
     */
    public function __construct(ResearchClientInterface $researchClient)
    {
        $this->researchClient = $researchClient;
    }

    /**
     * Handle GET /products/
     */
    public function getIndex()
    {
        return $this->researchClient->getSearch('keyword', 'testing');
    }
}
```

Laravel's container is smart enough to automatically perform dependency
injection, which adds the client parameter for you when initializing your
controller's class
