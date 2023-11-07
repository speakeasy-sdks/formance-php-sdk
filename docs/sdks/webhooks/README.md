# Webhooks


### Available Operations

* [activateConfig](#activateconfig) - Activate one config
* [changeConfigSecret](#changeconfigsecret) - Change the signing secret of a config
* [deactivateConfig](#deactivateconfig) - Deactivate one config
* [deleteConfig](#deleteconfig) - Delete one config
* [getManyConfigs](#getmanyconfigs) - Get many configs
* [insertConfig](#insertconfig) - Insert a new config
* [testConfig](#testconfig) - Test one config

## activateConfig

Activate a webhooks config by ID, to start receiving webhooks to its endpoint.

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
    $request = new Operations\ActivateConfigRequest();
    $request->id = '4997257d-dfb6-445b-929c-cbe2ab182818';

    $response = $sdk->webhooks->activateConfig($request);

    if ($response->configResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\formance\formance\Models\Operations\ActivateConfigRequest](../../models/operations/ActivateConfigRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\formance\formance\Models\Operations\ActivateConfigResponse](../../models/operations/ActivateConfigResponse.md)**


## changeConfigSecret

Change the signing secret of the endpoint of a webhooks config.

If not passed or empty, a secret is automatically generated.
The format is a random string of bytes of size 24, base64 encoded. (larger size after encoding)


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
    $request = new Operations\ChangeConfigSecretRequest();
    $request->configChangeSecret = new Shared\ConfigChangeSecret();
    $request->configChangeSecret->secret = 'V0bivxRWveaoz08afqjU6Ko/jwO0Cb+3';
    $request->id = '4997257d-dfb6-445b-929c-cbe2ab182818';

    $response = $sdk->webhooks->changeConfigSecret($request);

    if ($response->configResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\formance\formance\Models\Operations\ChangeConfigSecretRequest](../../models/operations/ChangeConfigSecretRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\formance\formance\Models\Operations\ChangeConfigSecretResponse](../../models/operations/ChangeConfigSecretResponse.md)**


## deactivateConfig

Deactivate a webhooks config by ID, to stop receiving webhooks to its endpoint.

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
    $request = new Operations\DeactivateConfigRequest();
    $request->id = '4997257d-dfb6-445b-929c-cbe2ab182818';

    $response = $sdk->webhooks->deactivateConfig($request);

    if ($response->configResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\formance\formance\Models\Operations\DeactivateConfigRequest](../../models/operations/DeactivateConfigRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\formance\formance\Models\Operations\DeactivateConfigResponse](../../models/operations/DeactivateConfigResponse.md)**


## deleteConfig

Delete a webhooks config by ID.

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
    $request = new Operations\DeleteConfigRequest();
    $request->id = '4997257d-dfb6-445b-929c-cbe2ab182818';

    $response = $sdk->webhooks->deleteConfig($request);

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
| `$request`                                                                                                 | [\formance\formance\Models\Operations\DeleteConfigRequest](../../models/operations/DeleteConfigRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\formance\formance\Models\Operations\DeleteConfigResponse](../../models/operations/DeleteConfigResponse.md)**


## getManyConfigs

Sorted by updated date descending

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
    $request = new Operations\GetManyConfigsRequest();
    $request->endpoint = 'https://example.com';
    $request->id = '4997257d-dfb6-445b-929c-cbe2ab182818';

    $response = $sdk->webhooks->getManyConfigs($request);

    if ($response->configsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\formance\formance\Models\Operations\GetManyConfigsRequest](../../models/operations/GetManyConfigsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\formance\formance\Models\Operations\GetManyConfigsResponse](../../models/operations/GetManyConfigsResponse.md)**


## insertConfig

Insert a new webhooks config.

The endpoint should be a valid https URL and be unique.

The secret is the endpoint's verification secret.
If not passed or empty, a secret is automatically generated.
The format is a random string of bytes of size 24, base64 encoded. (larger size after encoding)

All eventTypes are converted to lower-case when inserted.


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
    $request = new Shared\ConfigUser();
    $request->endpoint = 'https://example.com';
    $request->eventTypes = [
        'TYPE1',
    ];
    $request->secret = 'V0bivxRWveaoz08afqjU6Ko/jwO0Cb+3';

    $response = $sdk->webhooks->insertConfig($request);

    if ($response->configResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [\formance\formance\Models\Shared\ConfigUser](../../models/shared/ConfigUser.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |


### Response

**[?\formance\formance\Models\Operations\InsertConfigResponse](../../models/operations/InsertConfigResponse.md)**


## testConfig

Test a config by sending a webhook to its endpoint.

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
    $request = new Operations\TestConfigRequest();
    $request->id = '4997257d-dfb6-445b-929c-cbe2ab182818';

    $response = $sdk->webhooks->testConfig($request);

    if ($response->attemptResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\formance\formance\Models\Operations\TestConfigRequest](../../models/operations/TestConfigRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\formance\formance\Models\Operations\TestConfigResponse](../../models/operations/TestConfigResponse.md)**

