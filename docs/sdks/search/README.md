# Search


### Available Operations

* [search](#search) - Search
* [searchgetServerInfo](#searchgetserverinfo) - Get server info

## search

ElasticSearch query engine

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Shared\Query();
    $request->after = [
        'users:002',
    ];
    $request->cursor = 'YXVsdCBhbmQgYSBtYXhpbXVtIG1heF9yZXN1bHRzLol=';
    $request->ledgers = [
        'quickstart',
    ];
    $request->pageSize = 307631;
    $request->policy = 'OR';
    $request->raw = new Shared\QueryRaw();
    $request->sort = 'txid:asc';
    $request->target = 'string';
    $request->terms = [
        'destination=central_bank1',
    ];;

    $response = $sdk->search->search($request);

    if ($response->response !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [\formance\formance\Models\Shared\Query](../../Models/Shared/Query.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |


### Response

**[?\formance\formance\Models\Operations\SearchResponse](../../Models/Operations/SearchResponse.md)**


## searchgetServerInfo

Get server info

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->search->searchgetServerInfo();

    if ($response->serverInfo !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\formance\formance\Models\Operations\SearchgetServerInfoResponse](../../Models/Operations/SearchgetServerInfoResponse.md)**

