# NodeMWS PHP Client

## Requirements:

- Composer and `autoload.php`

## How to install:

This is a private package so composer dependencies need to be manually added:

```
"repositories": [
        {
            "type": "vcs",
            "url": "git@bitbucket.org:roundsphere/nodemws-client.git"
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