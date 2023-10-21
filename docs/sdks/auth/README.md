# Auth
(*auth*)

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

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\AddScopeToClientRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AddScopeToClientRequest();
    $request->clientId = 'string';
    $request->scopeId = 'string';

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
| `$request`                                                                                                         | [\formance\formance\Models\Operations\AddScopeToClientRequest](../../models/operations/AddScopeToClientRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\formance\formance\Models\Operations\AddScopeToClientResponse](../../models/operations/AddScopeToClientResponse.md)**


## addTransientScope

Add a transient scope to a scope

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\AddTransientScopeRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AddTransientScopeRequest();
    $request->scopeId = 'string';
    $request->transientScopeId = 'string';

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
| `$request`                                                                                                           | [\formance\formance\Models\Operations\AddTransientScopeRequest](../../models/operations/AddTransientScopeRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\formance\formance\Models\Operations\AddTransientScopeResponse](../../models/operations/AddTransientScopeResponse.md)**


## createClient

Create client

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Shared\CreateClientRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateClientRequest();
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
    $request->trusted = false;

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
| `$request`                                                                                         | [\formance\formance\Models\Shared\CreateClientRequest](../../models/shared/CreateClientRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\formance\formance\Models\Operations\CreateClientResponse](../../models/operations/CreateClientResponse.md)**


## createScope

Create scope

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Shared\CreateScopeRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateScopeRequest();
    $request->label = 'string';
    $request->metadata = [
        'sensor' => 'string',
    ];

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
| `$request`                                                                                       | [\formance\formance\Models\Shared\CreateScopeRequest](../../models/shared/CreateScopeRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?\formance\formance\Models\Operations\CreateScopeResponse](../../models/operations/CreateScopeResponse.md)**


## createSecret

Add a secret to a client

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\CreateSecretRequest;
use \formance\formance\Models\Shared\CreateSecretRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateSecretRequest();
    $request->createSecretRequest = new CreateSecretRequest();
    $request->createSecretRequest->metadata = [
        'architecture' => 'string',
    ];
    $request->createSecretRequest->name = 'string';
    $request->clientId = 'string';

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
| `$request`                                                                                                 | [\formance\formance\Models\Operations\CreateSecretRequest](../../models/operations/CreateSecretRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\formance\formance\Models\Operations\CreateSecretResponse](../../models/operations/CreateSecretResponse.md)**


## deleteClient

Delete client

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\DeleteClientRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteClientRequest();
    $request->clientId = 'string';

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
| `$request`                                                                                                 | [\formance\formance\Models\Operations\DeleteClientRequest](../../models/operations/DeleteClientRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\formance\formance\Models\Operations\DeleteClientResponse](../../models/operations/DeleteClientResponse.md)**


## deleteScope

Delete scope

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\DeleteScopeRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteScopeRequest();
    $request->scopeId = 'string';

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
| `$request`                                                                                               | [\formance\formance\Models\Operations\DeleteScopeRequest](../../models/operations/DeleteScopeRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\formance\formance\Models\Operations\DeleteScopeResponse](../../models/operations/DeleteScopeResponse.md)**


## deleteScopeFromClient

Delete scope from client

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\DeleteScopeFromClientRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteScopeFromClientRequest();
    $request->clientId = 'string';
    $request->scopeId = 'string';

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
| `$request`                                                                                                                   | [\formance\formance\Models\Operations\DeleteScopeFromClientRequest](../../models/operations/DeleteScopeFromClientRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\formance\formance\Models\Operations\DeleteScopeFromClientResponse](../../models/operations/DeleteScopeFromClientResponse.md)**


## deleteSecret

Delete a secret from a client

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\DeleteSecretRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteSecretRequest();
    $request->clientId = 'string';
    $request->secretId = 'string';

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
| `$request`                                                                                                 | [\formance\formance\Models\Operations\DeleteSecretRequest](../../models/operations/DeleteSecretRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\formance\formance\Models\Operations\DeleteSecretResponse](../../models/operations/DeleteSecretResponse.md)**


## deleteTransientScope

Delete a transient scope from a scope

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\DeleteTransientScopeRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteTransientScopeRequest();
    $request->scopeId = 'string';
    $request->transientScopeId = 'string';

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
| `$request`                                                                                                                 | [\formance\formance\Models\Operations\DeleteTransientScopeRequest](../../models/operations/DeleteTransientScopeRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\formance\formance\Models\Operations\DeleteTransientScopeResponse](../../models/operations/DeleteTransientScopeResponse.md)**


## getServerInfo

Get server info

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

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

**[?\formance\formance\Models\Operations\GetServerInfoResponse](../../models/operations/GetServerInfoResponse.md)**


## listClients

List clients

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

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

**[?\formance\formance\Models\Operations\ListClientsResponse](../../models/operations/ListClientsResponse.md)**


## listScopes

List Scopes

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

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

**[?\formance\formance\Models\Operations\ListScopesResponse](../../models/operations/ListScopesResponse.md)**


## listUsers

List users

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

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

**[?\formance\formance\Models\Operations\ListUsersResponse](../../models/operations/ListUsersResponse.md)**


## readClient

Read client

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\ReadClientRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ReadClientRequest();
    $request->clientId = 'string';

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
| `$request`                                                                                             | [\formance\formance\Models\Operations\ReadClientRequest](../../models/operations/ReadClientRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\formance\formance\Models\Operations\ReadClientResponse](../../models/operations/ReadClientResponse.md)**


## readScope

Read scope

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\ReadScopeRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ReadScopeRequest();
    $request->scopeId = 'string';

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
| `$request`                                                                                           | [\formance\formance\Models\Operations\ReadScopeRequest](../../models/operations/ReadScopeRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\formance\formance\Models\Operations\ReadScopeResponse](../../models/operations/ReadScopeResponse.md)**


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

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ReadUserRequest();
    $request->userId = 'string';

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
| `$request`                                                                                         | [\formance\formance\Models\Operations\ReadUserRequest](../../models/operations/ReadUserRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\formance\formance\Models\Operations\ReadUserResponse](../../models/operations/ReadUserResponse.md)**


## updateClient

Update client

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\UpdateClientRequest;
use \formance\formance\Models\Shared\UpdateClientRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateClientRequest();
    $request->updateClientRequest = new UpdateClientRequest();
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
    $request->clientId = 'string';

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
| `$request`                                                                                                 | [\formance\formance\Models\Operations\UpdateClientRequest](../../models/operations/UpdateClientRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\formance\formance\Models\Operations\UpdateClientResponse](../../models/operations/UpdateClientResponse.md)**


## updateScope

Update scope

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\UpdateScopeRequest;
use \formance\formance\Models\Shared\UpdateScopeRequest;

$security = new Security();
$security->authorization = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateScopeRequest();
    $request->updateScopeRequest = new UpdateScopeRequest();
    $request->updateScopeRequest->label = 'string';
    $request->updateScopeRequest->metadata = [
        'Paradigm' => 'string',
    ];
    $request->scopeId = 'string';

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
| `$request`                                                                                               | [\formance\formance\Models\Operations\UpdateScopeRequest](../../models/operations/UpdateScopeRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\formance\formance\Models\Operations\UpdateScopeResponse](../../models/operations/UpdateScopeResponse.md)**

