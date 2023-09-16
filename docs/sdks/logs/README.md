# Logs

### Available Operations

* [listLogs](#listlogs) - List the logs from a ledger

## listLogs

List the logs from a ledger, sorted by ID in descending order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\ListLogsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListLogsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-05-11T16:11:54.761Z');
    $request->ledger = 'ledger001';
    $request->pageSize = 13571;
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-18T15:52:05.226Z');

    $response = $sdk->logs->listLogs($request);

    if ($response->logsCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\formance\formance\Models\Operations\ListLogsRequest](../../models/operations/ListLogsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\formance\formance\Models\Operations\ListLogsResponse](../../models/operations/ListLogsResponse.md)**

