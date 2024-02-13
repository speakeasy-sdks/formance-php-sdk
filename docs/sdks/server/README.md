# Server


### Available Operations

* [getInfo](#getinfo) - Show server information

## getInfo

Show server information

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
    $response = $sdk->server->getInfo();

    if ($response->configInfoResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\formance\formance\Models\Operations\GetInfoResponse](../../Models/Operations/GetInfoResponse.md)**

