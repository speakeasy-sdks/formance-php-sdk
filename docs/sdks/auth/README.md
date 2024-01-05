# Auth


### Available Operations

* [addScopeToClient](#addscopetoclient) - Add scope to client
* [addTransientScope](#addtransientscope) - Add a transient scope to a scope
* [createClient](#createclient) - Create client
* [createScope](#createscope) - Create scope
* [createSecret](#createsecret) - Add a secret to a client
* [deleteClient](#deleteclient) - Delete client
* [deleteScope](#deletescope) - Delete scope
* [deleteScopeFromClient](#deletescopefromclient) - Delete scope from client
* [deleteSecret](#deletesecret) - Delete a secret from a client
* [deleteTransientScope](#deletetransientscope) - Delete a transient scope from a scope
* [getServerInfo](#getserverinfo) - Get server info
* [listClients](#listclients) - List clients
* [listScopes](#listscopes) - List scopes
* [listUsers](#listusers) - List users
* [readClient](#readclient) - Read client
* [readScope](#readscope) - Read scope
* [readUser](#readuser) - Read user
* [updateClient](#updateclient) - Update client
* [updateScope](#updatescope) - Update scope

## addScopeToClient

Add scope to client

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AddScopeToClientRequest();
    $request->clientId = 'string';
    $request->scopeId = 'string';;

    $response = $sdk->auth->addScopeToClient($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\formance\formance\Models\Operations\AddScopeToClientRequest](../../Models/Operations/AddScopeToClientRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\formance\formance\Models\Operations\AddScopeToClientResponse](../../Models/Operations/AddScopeToClientResponse.md)**


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
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AddTransientScopeRequest();
    $request->scopeId = 'string';
    $request->transientScopeId = 'string';;

    $response = $sdk->auth->addTransientScope($request);

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


## createClient

Create client

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
        $request = new Shared\CreateClientRequest();
    $request->description = 'Managed optimizing help-desk';
    $request->metadata = [
        'pessimistic' => 'string',
    ];
    $request->name = 'string';
    $request->postLogoutRedirectUris = [
        'string',
    ];
    $request->public = false;
    $request->redirectUris = [
        'string',
    ];
    $request->trusted = false;;

    $response = $sdk->auth->createClient($request);

    if ($response->createClientResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\formance\formance\Models\Shared\CreateClientRequest](../../Models/Shared/CreateClientRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\formance\formance\Models\Operations\CreateClientResponse](../../Models/Operations/CreateClientResponse.md)**


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
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Shared\CreateScopeRequest();
    $request->label = 'string';
    $request->metadata = [
        'sensor' => 'string',
    ];;

    $response = $sdk->auth->createScope($request);

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


## createSecret

Add a secret to a client

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

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
        'architecture' => 'string',
    ];
    $request->createSecretRequest->name = 'string';
    $request->clientId = 'string';;

    $response = $sdk->auth->createSecret($request);

    if ($response->createSecretResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
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
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteClientRequest();
    $request->clientId = 'string';;

    $response = $sdk->auth->deleteClient($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\formance\formance\Models\Operations\DeleteClientRequest](../../Models/Operations/DeleteClientRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\formance\formance\Models\Operations\DeleteClientResponse](../../Models/Operations/DeleteClientResponse.md)**


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
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteScopeRequest();
    $request->scopeId = 'string';;

    $response = $sdk->auth->deleteScope($request);

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


## deleteScopeFromClient

Delete scope from client

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteScopeFromClientRequest();
    $request->clientId = 'string';
    $request->scopeId = 'string';;

    $response = $sdk->auth->deleteScopeFromClient($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
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
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteSecretRequest();
    $request->clientId = 'string';
    $request->secretId = 'string';;

    $response = $sdk->auth->deleteSecret($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\formance\formance\Models\Operations\DeleteSecretRequest](../../Models/Operations/DeleteSecretRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\formance\formance\Models\Operations\DeleteSecretResponse](../../Models/Operations/DeleteSecretResponse.md)**


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
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteTransientScopeRequest();
    $request->scopeId = 'string';
    $request->transientScopeId = 'string';;

    $response = $sdk->auth->deleteTransientScope($request);

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


## getServerInfo

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
    $response = $sdk->auth->getServerInfo();

    if ($response->serverInfo !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\formance\Models\Operations\GetServerInfoResponse](../../Models/Operations/GetServerInfoResponse.md)**


## listClients

List clients

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
    $response = $sdk->auth->listClients();

    if ($response->listClientsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\formance\Models\Operations\ListClientsResponse](../../Models/Operations/ListClientsResponse.md)**


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
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->auth->listScopes();

    if ($response->listScopesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\formance\Models\Operations\ListScopesResponse](../../Models/Operations/ListScopesResponse.md)**


## listUsers

List users

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
    $response = $sdk->auth->listUsers();

    if ($response->listUsersResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\formance\Models\Operations\ListUsersResponse](../../Models/Operations/ListUsersResponse.md)**


## readClient

Read client

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ReadClientRequest();
    $request->clientId = 'string';;

    $response = $sdk->auth->readClient($request);

    if ($response->readClientResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\formance\formance\Models\Operations\ReadClientRequest](../../Models/Operations/ReadClientRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\formance\formance\Models\Operations\ReadClientResponse](../../Models/Operations/ReadClientResponse.md)**


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
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ReadScopeRequest();
    $request->scopeId = 'string';;

    $response = $sdk->auth->readScope($request);

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


## readUser

Read user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ReadUserRequest();
    $request->userId = 'string';;

    $response = $sdk->auth->readUser($request);

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
| `$request`                                                                                         | [\formance\formance\Models\Operations\ReadUserRequest](../../Models/Operations/ReadUserRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\formance\formance\Models\Operations\ReadUserResponse](../../Models/Operations/ReadUserResponse.md)**


## updateClient

Update client

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

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
        'Bentley' => 'string',
    ];
    $request->updateClientRequest->name = 'string';
    $request->updateClientRequest->postLogoutRedirectUris = [
        'string',
    ];
    $request->updateClientRequest->public = false;
    $request->updateClientRequest->redirectUris = [
        'string',
    ];
    $request->updateClientRequest->trusted = false;
    $request->clientId = 'string';;

    $response = $sdk->auth->updateClient($request);

    if ($response->updateClientResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\formance\formance\Models\Operations\UpdateClientRequest](../../Models/Operations/UpdateClientRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\formance\formance\Models\Operations\UpdateClientResponse](../../Models/Operations/UpdateClientResponse.md)**


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
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateScopeRequest();
    $request->updateScopeRequest = new Shared\UpdateScopeRequest();
    $request->updateScopeRequest->label = 'string';
    $request->updateScopeRequest->metadata = [
        'Paradigm' => 'string',
    ];
    $request->scopeId = 'string';;

    $response = $sdk->auth->updateScope($request);

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

