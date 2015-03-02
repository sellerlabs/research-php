# ModernMWS PHP Client ![Build Status](https://travis-ci.org/sellerlabs/modernmws-php.svg?branch=master)

Previously known as NodeMWS client.

This is a PHP client library for SellerLabs' research service

## Requirements:

- Composer and `autoload.php`
- Credentials to the research service

## Documentation

- The API docs are available at: https://docs.sellerlabs.com/research/

## How to install:

This package is currently not in Packagist, so you need to add dependencies 
to your `package.json` manually:

```php
"repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:sellerlabs/modernmws-php.git"
        }
    ],
"require": {
    "sellerlabs/nodemws-client": "dev-master"
}
```

## How to use with Laravel:

First you need to configure the client inside your app service provider:

```php
public function register()
{
	$this->app->bind('SellerLabs\NodeMws\Interfaces\NodeMwsClientInterface', function () {
            return new NodeMwsClient(
            	'YourClientId',
            	'YourClientSecret',
            	'http://nodemws-staging.elasticbeanstalk.com'
            );
    });
}
```

Then inside any of your controllers, you can inject the dependency through the constructor:

```php
protected $nodeMwsClient;

public function __construct(NodeMwsClientInterface $nodeMwsClient) {
	$this->nodeMwsClient = $nodeMwsClient;
}

public function getIndex()
{
	return $this->nodeMwsClient->getSearch('keyword', 'testing');
}
```

Laravel's container is smart enough to automatically add the parameter for you when initializing your controller's class
