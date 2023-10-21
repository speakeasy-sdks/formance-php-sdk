# Balances
(*balances*)

### Available Operations

* [getBalances](#getbalances) - Get the balances from a ledger's account
* [getBalancesAggregated](#getbalancesaggregated) - Get the aggregated balances from selected accounts

## getBalances

Get the balances from a ledger's account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\GetBalancesRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetBalancesRequest();
    $request->address = 'users:001';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->ledger = 'ledger001';
    $request->pageSize = 755286;

    $response = $sdk->balances->getBalances($request);

    if ($response->balancesCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\formance\formance\Models\Operations\GetBalancesRequest](../../models/operations/GetBalancesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\formance\formance\Models\Operations\GetBalancesResponse](../../models/operations/GetBalancesResponse.md)**


## getBalancesAggregated

Get the aggregated balances from selected accounts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\GetBalancesAggregatedRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetBalancesAggregatedRequest();
    $request->address = 'users:001';
    $request->ledger = 'ledger001';

    $response = $sdk->balances->getBalancesAggregated($request);

    if ($response->aggregateBalancesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [\formance\formance\Models\Operations\GetBalancesAggregatedRequest](../../models/operations/GetBalancesAggregatedRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\formance\formance\Models\Operations\GetBalancesAggregatedResponse](../../models/operations/GetBalancesAggregatedResponse.md)**

