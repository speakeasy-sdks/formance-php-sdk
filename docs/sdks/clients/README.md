# Clients


### Available Operations

* [addScopeToClient](#addscopetoclient) - Add scope to client
* [createClient](#createclient) - Create client
* [createSecret](#createsecret) - Add a secret to a client
* [deleteClient](#deleteclient) - Delete client
* [deleteScopeFromClient](#deletescopefromclient) - Delete scope from client
* [deleteSecret](#deletesecret) - Delete a secret from a client
* [listClients](#listclients) - List clients
* [readClient](#readclient) - Read client
* [updateClient](#updateclient) - Update client

## addScopeToClient

Add scope to client

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AddScopeToClientRequest();
    $request->clientId = '<value>';
    $request->scopeId = '<value>';;

    $response = $sdk->clients->addScopeToClient($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\formance\formance\Models\Operations\AddScopeToClientRequest](../../Models/Operations/AddScopeToClientRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\formance\formance\Models\Operations\AddScopeToClientResponse](../../Models/Operations/AddScopeToClientResponse.md)**


## createClient

Create client

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Shared\CreateClientRequest();
    $request->description = 'Managed optimizing help-desk';
    $request->metadata = [
        'pessimistic' => '<value>',
    ];
    $request->name = '<value>';
    $request->postLogoutRedirectUris = [
        '<value>',
    ];
    $request->public = false;
    $request->redirectUris = [
        '<value>',
    ];
    $request->trusted = false;;

    $response = $sdk->clients->createClient($request);

    if ($response->createClientResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\formance\formance\Models\Shared\CreateClientRequest](../../Models/Shared/CreateClientRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\formance\formance\Models\Operations\CreateClientResponse](../../Models/Operations/CreateClientResponse.md)**


## createSecret

Add a secret to a client

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateSecretRequest();
    $request->createSecretRequest = new Shared\CreateSecretRequest();
    $request->createSecretRequest->metadata = [
        'architecture' => '<value>',
    ];
    $request->createSecretRequest->name = '<value>';
    $request->clientId = '<value>';;

    $response = $sdk->clients->createSecret($request);

    if ($response->createSecretResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\formance\formance\Models\Operations\CreateSecretRequest](../../Models/Operations/CreateSecretRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\formance\formance\Models\Operations\CreateSecretResponse](../../Models/Operations/CreateSecretResponse.md)**


## deleteClient

Delete client

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteClientRequest();
    $request->clientId = '<value>';;

    $response = $sdk->clients->deleteClient($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\formance\formance\Models\Operations\DeleteClientRequest](../../Models/Operations/DeleteClientRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\formance\formance\Models\Operations\DeleteClientResponse](../../Models/Operations/DeleteClientResponse.md)**


## deleteScopeFromClient

Delete scope from client

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteScopeFromClientRequest();
    $request->clientId = '<value>';
    $request->scopeId = '<value>';;

    $response = $sdk->clients->deleteScopeFromClient($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [\formance\formance\Models\Operations\DeleteScopeFromClientRequest](../../Models/Operations/DeleteScopeFromClientRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\formance\formance\Models\Operations\DeleteScopeFromClientResponse](../../Models/Operations/DeleteScopeFromClientResponse.md)**


## deleteSecret

Delete a secret from a client

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteSecretRequest();
    $request->clientId = '<value>';
    $request->secretId = '<value>';;

    $response = $sdk->clients->deleteSecret($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\formance\formance\Models\Operations\DeleteSecretRequest](../../Models/Operations/DeleteSecretRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\formance\formance\Models\Operations\DeleteSecretResponse](../../Models/Operations/DeleteSecretResponse.md)**


## listClients

List clients

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->clients->listClients();

    if ($response->listClientsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\formance\formance\Models\Operations\ListClientsResponse](../../Models/Operations/ListClientsResponse.md)**


## readClient

Read client

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ReadClientRequest();
    $request->clientId = '<value>';;

    $response = $sdk->clients->readClient($request);

    if ($response->readClientResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\formance\formance\Models\Operations\ReadClientRequest](../../Models/Operations/ReadClientRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\formance\formance\Models\Operations\ReadClientResponse](../../Models/Operations/ReadClientResponse.md)**


## updateClient

Update client

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateClientRequest();
    $request->updateClientRequest = new Shared\UpdateClientRequest();
    $request->updateClientRequest->description = 'Secured static model';
    $request->updateClientRequest->metadata = [
        'Bentley' => '<value>',
    ];
    $request->updateClientRequest->name = '<value>';
    $request->updateClientRequest->postLogoutRedirectUris = [
        '<value>',
    ];
    $request->updateClientRequest->public = false;
    $request->updateClientRequest->redirectUris = [
        '<value>',
    ];
    $request->updateClientRequest->trusted = false;
    $request->clientId = '<value>';;

    $response = $sdk->clients->updateClient($request);

    if ($response->updateClientResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\formance\formance\Models\Operations\UpdateClientRequest](../../Models/Operations/UpdateClientRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\formance\formance\Models\Operations\UpdateClientResponse](../../Models/Operations/UpdateClientResponse.md)**

