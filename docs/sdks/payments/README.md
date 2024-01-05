# Payments


### Available Operations

* [connectorsStripeTransfer](#connectorsstripetransfer) - Transfer funds between Stripe accounts
* [connectorsTransfer](#connectorstransfer) - Transfer funds between Connector accounts
* [getConnectorTask](#getconnectortask) - Read a specific task of the connector
* [getPayment](#getpayment) - Get a payment
* [installConnector](#installconnector) - Install a connector
* [listAllConnectors](#listallconnectors) - List all installed connectors
* [listConfigsAvailableConnectors](#listconfigsavailableconnectors) - List the configs of each available connector
* [listConnectorTasks](#listconnectortasks) - List tasks from a connector
* [listConnectorsTransfers](#listconnectorstransfers) - List transfers and their statuses
* [listPayments](#listpayments) - List payments
* [paymentsgetServerInfo](#paymentsgetserverinfo) - Get server info
* [paymentslistAccounts](#paymentslistaccounts) - List accounts
* [readConnectorConfig](#readconnectorconfig) - Read the config of a connector
* [resetConnector](#resetconnector) - Reset a connector
* [uninstallConnector](#uninstallconnector) - Uninstall a connector
* [updateMetadata](#updatemetadata) - Update metadata

## connectorsStripeTransfer

Execute a transfer between two Stripe accounts.

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
        $request = new Shared\StripeTransferRequest();
    $request->amount = 100;
    $request->asset = 'USD';
    $request->destination = 'acct_1Gqj58KZcSIg2N2q';
    $request->metadata = new Shared\StripeTransferRequestMetadata();;

    $response = $sdk->payments->connectorsStripeTransfer($request);

    if ($response->stripeTransferResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\formance\formance\Models\Shared\StripeTransferRequest](../../Models/Shared/StripeTransferRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\formance\formance\Models\Operations\ConnectorsStripeTransferResponse](../../Models/Operations/ConnectorsStripeTransferResponse.md)**


## connectorsTransfer

Execute a transfer between two accounts.

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
        $request = new Operations\ConnectorsTransferRequest();
    $request->transferRequest = new Shared\TransferRequest();
    $request->transferRequest->amount = 100;
    $request->transferRequest->asset = 'USD';
    $request->transferRequest->destination = 'acct_1Gqj58KZcSIg2N2q';
    $request->transferRequest->source = 'acct_1Gqj58KZcSIg2N2q';
    $request->connector = Shared\Connector::Wise;;

    $response = $sdk->payments->connectorsTransfer($request);

    if ($response->transferResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\formance\formance\Models\Operations\ConnectorsTransferRequest](../../Models/Operations/ConnectorsTransferRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\formance\formance\Models\Operations\ConnectorsTransferResponse](../../Models/Operations/ConnectorsTransferResponse.md)**


## getConnectorTask

Get a specific task associated to the connector.

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
        $request = new Operations\GetConnectorTaskRequest();
    $request->connector = Shared\Connector::BankingCircle;
    $request->taskId = 'string';;

    $response = $sdk->payments->getConnectorTask($request);

    if ($response->taskResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\formance\formance\Models\Operations\GetConnectorTaskRequest](../../Models/Operations/GetConnectorTaskRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\formance\formance\Models\Operations\GetConnectorTaskResponse](../../Models/Operations/GetConnectorTaskResponse.md)**


## getPayment

Get a payment

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
        $request = new Operations\GetPaymentRequest();
    $request->paymentId = 'string';;

    $response = $sdk->payments->getPayment($request);

    if ($response->paymentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\formance\formance\Models\Operations\GetPaymentRequest](../../Models/Operations/GetPaymentRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\formance\formance\Models\Operations\GetPaymentResponse](../../Models/Operations/GetPaymentResponse.md)**


## installConnector

Install a connector by its name and config.

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
        $request = new Operations\InstallConnectorRequest();
    $request->requestBody = 'string';
    $request->connector = Shared\Connector::DummyPay;;

    $response = $sdk->payments->installConnector($request);

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
| `$request`                                                                                                         | [\formance\formance\Models\Operations\InstallConnectorRequest](../../Models/Operations/InstallConnectorRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\formance\formance\Models\Operations\InstallConnectorResponse](../../Models/Operations/InstallConnectorResponse.md)**


## listAllConnectors

List all installed connectors.

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
    $response = $sdk->payments->listAllConnectors();

    if ($response->connectorsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\formance\Models\Operations\ListAllConnectorsResponse](../../Models/Operations/ListAllConnectorsResponse.md)**


## listConfigsAvailableConnectors

List the configs of each available connector.

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
    $response = $sdk->payments->listConfigsAvailableConnectors();

    if ($response->connectorsConfigsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\formance\Models\Operations\ListConfigsAvailableConnectorsResponse](../../Models/Operations/ListConfigsAvailableConnectorsResponse.md)**


## listConnectorTasks

List all tasks associated with this connector.

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
        $request = new Operations\ListConnectorTasksRequest();
    $request->connector = Shared\Connector::DummyPay;
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 501686;;

    $response = $sdk->payments->listConnectorTasks($request);

    if ($response->tasksCursor !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\formance\formance\Models\Operations\ListConnectorTasksRequest](../../Models/Operations/ListConnectorTasksRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\formance\formance\Models\Operations\ListConnectorTasksResponse](../../Models/Operations/ListConnectorTasksResponse.md)**


## listConnectorsTransfers

List transfers

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
        $request = new Operations\ListConnectorsTransfersRequest();
    $request->connector = Shared\Connector::Modulr;;

    $response = $sdk->payments->listConnectorsTransfers($request);

    if ($response->transfersResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [\formance\formance\Models\Operations\ListConnectorsTransfersRequest](../../Models/Operations/ListConnectorsTransfersRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |


### Response

**[?\formance\formance\Models\Operations\ListConnectorsTransfersResponse](../../Models/Operations/ListConnectorsTransfersResponse.md)**


## listPayments

List payments

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
        $request = new Operations\ListPaymentsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 13778;
    $request->sort = [
        'string',
    ];;

    $response = $sdk->payments->listPayments($request);

    if ($response->paymentsCursor !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\formance\formance\Models\Operations\ListPaymentsRequest](../../Models/Operations/ListPaymentsRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\formance\formance\Models\Operations\ListPaymentsResponse](../../Models/Operations/ListPaymentsResponse.md)**


## paymentsgetServerInfo

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
    $response = $sdk->payments->paymentsgetServerInfo();

    if ($response->serverInfo !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\formance\Models\Operations\PaymentsgetServerInfoResponse](../../Models/Operations/PaymentsgetServerInfoResponse.md)**


## paymentslistAccounts

List accounts

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
        $request = new Operations\PaymentslistAccountsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->pageSize = 227071;
    $request->sort = [
        'string',
    ];;

    $response = $sdk->payments->paymentslistAccounts($request);

    if ($response->accountsCursor !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\formance\formance\Models\Operations\PaymentslistAccountsRequest](../../Models/Operations/PaymentslistAccountsRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\formance\formance\Models\Operations\PaymentslistAccountsResponse](../../Models/Operations/PaymentslistAccountsResponse.md)**


## readConnectorConfig

Read connector config

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
        $request = new Operations\ReadConnectorConfigRequest();
    $request->connector = Shared\Connector::BankingCircle;;

    $response = $sdk->payments->readConnectorConfig($request);

    if ($response->connectorConfigResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\formance\formance\Models\Operations\ReadConnectorConfigRequest](../../Models/Operations/ReadConnectorConfigRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\formance\formance\Models\Operations\ReadConnectorConfigResponse](../../Models/Operations/ReadConnectorConfigResponse.md)**


## resetConnector

Reset a connector by its name.
It will remove the connector and ALL PAYMENTS generated with it.


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
        $request = new Operations\ResetConnectorRequest();
    $request->connector = Shared\Connector::CurrencyCloud;;

    $response = $sdk->payments->resetConnector($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\formance\formance\Models\Operations\ResetConnectorRequest](../../Models/Operations/ResetConnectorRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\formance\formance\Models\Operations\ResetConnectorResponse](../../Models/Operations/ResetConnectorResponse.md)**


## uninstallConnector

Uninstall a connector by its name.

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
        $request = new Operations\UninstallConnectorRequest();
    $request->connector = Shared\Connector::DummyPay;;

    $response = $sdk->payments->uninstallConnector($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\formance\formance\Models\Operations\UninstallConnectorRequest](../../Models/Operations/UninstallConnectorRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\formance\formance\Models\Operations\UninstallConnectorResponse](../../Models/Operations/UninstallConnectorResponse.md)**


## updateMetadata

Update metadata

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
        $request = new Operations\UpdateMetadataRequest();
    $request->paymentMetadata = new Shared\PaymentMetadata();
    $request->paymentMetadata->key = '<key>';
    $request->paymentId = 'string';;

    $response = $sdk->payments->updateMetadata($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\formance\formance\Models\Operations\UpdateMetadataRequest](../../Models/Operations/UpdateMetadataRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\formance\formance\Models\Operations\UpdateMetadataResponse](../../Models/Operations/UpdateMetadataResponse.md)**

