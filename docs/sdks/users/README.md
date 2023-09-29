# Users
(*users*)

### Available Operations

* [listUsers](#listusers) - List users
* [readUser](#readuser) - Read user

## listUsers

List users

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->users->listUsers();

    if ($response->listUsersResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\formance\Models\Operations\ListUsersResponse](../../models/operations/ListUsersResponse.md)**


## readUser

Read user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\ReadUserRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ReadUserRequest();
    $request->userId = 'Goodwin Folding always';

    $response = $sdk->users->readUser($request);

    if ($response->readUserResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\formance\formance\Models\Operations\ReadUserRequest](../../models/operations/ReadUserRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\formance\formance\Models\Operations\ReadUserResponse](../../models/operations/ReadUserResponse.md)**

