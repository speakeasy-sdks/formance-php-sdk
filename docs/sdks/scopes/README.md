# Scopes


### Available Operations

* [addTransientScope](#addtransientscope) - Add a transient scope to a scope
* [createScope](#createscope) - Create scope
* [deleteScope](#deletescope) - Delete scope
* [deleteTransientScope](#deletetransientscope) - Delete a transient scope from a scope
* [listScopes](#listscopes) - List scopes
* [readScope](#readscope) - Read scope
* [updateScope](#updatescope) - Update scope

## addTransientScope

Add a transient scope to a scope

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = '';

$sdk = formance\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\AddTransientScopeRequest();
    $request->scopeId = 'string';
    $request->transientScopeId = 'string';

    $response = $sdk->scopes->addTransientScope($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\formance\formance\Models\Operations\AddTransientScopeRequest](../../Models/Operations/AddTransientScopeRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\formance\formance\Models\Operations\AddTransientScopeResponse](../../Models/Operations/AddTransientScopeResponse.md)**


## createScope

Create scope

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;

$security = new Shared\Security();
$security->authorization = '';

$sdk = formance\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\CreateScopeRequest();
    $request->label = 'string';
    $request->metadata = [
        'sensor' => 'string',
    ];

    $response = $sdk->scopes->createScope($request);

    if ($response->createScopeResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [\formance\formance\Models\Shared\CreateScopeRequest](../../Models/Shared/CreateScopeRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?\formance\formance\Models\Operations\CreateScopeResponse](../../Models/Operations/CreateScopeResponse.md)**


## deleteScope

Delete scope

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = '';

$sdk = formance\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\DeleteScopeRequest();
    $request->scopeId = 'string';

    $response = $sdk->scopes->deleteScope($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\formance\formance\Models\Operations\DeleteScopeRequest](../../Models/Operations/DeleteScopeRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\formance\formance\Models\Operations\DeleteScopeResponse](../../Models/Operations/DeleteScopeResponse.md)**


## deleteTransientScope

Delete a transient scope from a scope

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = '';

$sdk = formance\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\DeleteTransientScopeRequest();
    $request->scopeId = 'string';
    $request->transientScopeId = 'string';

    $response = $sdk->scopes->deleteTransientScope($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\formance\formance\Models\Operations\DeleteTransientScopeRequest](../../Models/Operations/DeleteTransientScopeRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\formance\formance\Models\Operations\DeleteTransientScopeResponse](../../Models/Operations/DeleteTransientScopeResponse.md)**


## listScopes

List Scopes

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;

$security = new Shared\Security();
$security->authorization = '';

$sdk = formance\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->scopes->listScopes();

    if ($response->listScopesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\formance\Models\Operations\ListScopesResponse](../../Models/Operations/ListScopesResponse.md)**


## readScope

Read scope

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = '';

$sdk = formance\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ReadScopeRequest();
    $request->scopeId = 'string';

    $response = $sdk->scopes->readScope($request);

    if ($response->readScopeResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\formance\formance\Models\Operations\ReadScopeRequest](../../Models/Operations/ReadScopeRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\formance\formance\Models\Operations\ReadScopeResponse](../../Models/Operations/ReadScopeResponse.md)**


## updateScope

Update scope

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = '';

$sdk = formance\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateScopeRequest();
    $request->updateScopeRequest = new Shared\UpdateScopeRequest();
    $request->updateScopeRequest->label = 'string';
    $request->updateScopeRequest->metadata = [
        'Paradigm' => 'string',
    ];
    $request->scopeId = 'string';

    $response = $sdk->scopes->updateScope($request);

    if ($response->updateScopeResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\formance\formance\Models\Operations\UpdateScopeRequest](../../Models/Operations/UpdateScopeRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\formance\formance\Models\Operations\UpdateScopeResponse](../../Models/Operations/UpdateScopeResponse.md)**

