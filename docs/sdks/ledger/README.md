# Ledger


### Available Operations

* [addMetadataOnTransaction](#addmetadataontransaction) - Set the metadata of a transaction by its ID
* [addMetadataToAccount](#addmetadatatoaccount) - Add metadata to an account
* [countAccounts](#countaccounts) - Count the accounts from a ledger
* [countTransactions](#counttransactions) - Count the transactions from a ledger
* [createTransaction](#createtransaction) - Create a new transaction to a ledger
* [getAccount](#getaccount) - Get account by its address
* [getBalances](#getbalances) - Get the balances from a ledger's account
* [getBalancesAggregated](#getbalancesaggregated) - Get the aggregated balances from selected accounts
* [getInfo](#getinfo) - Show server information
* [getLedgerInfo](#getledgerinfo) - Get information about a ledger
* [getTransaction](#gettransaction) - Get transaction from a ledger by its ID
* [listAccounts](#listaccounts) - List accounts from a ledger
* [listLogs](#listlogs) - List the logs from a ledger
* [listTransactions](#listtransactions) - List transactions from a ledger
* [readStats](#readstats) - Get statistics from a ledger
* [revertTransaction](#reverttransaction) - Revert a ledger transaction by its ID

## addMetadataOnTransaction

Set the metadata of a transaction by its ID

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
    $request = new Operations\AddMetadataOnTransactionRequest();
    $request->idempotencyKey = 'string';
    $request->requestBody = [
        'withdrawal' => 'string',
    ];
    $request->async = true;
    $request->dryRun = true;
    $request->ledger = 'ledger001';
    $request->txid = 1234;

    $response = $sdk->ledger->addMetadataOnTransaction($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                          | Type                                                                                                                               | Required                                                                                                                           | Description                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                         | [\formance\formance\Models\Operations\AddMetadataOnTransactionRequest](../../models/operations/AddMetadataOnTransactionRequest.md) | :heavy_check_mark:                                                                                                                 | The request object to use for the request.                                                                                         |


### Response

**[?\formance\formance\Models\Operations\AddMetadataOnTransactionResponse](../../models/operations/AddMetadataOnTransactionResponse.md)**


## addMetadataToAccount

Add metadata to an account

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
    $request = new Operations\AddMetadataToAccountRequest();
    $request->idempotencyKey = 'string';
    $request->requestBody = [
        'Oriental' => 'string',
    ];
    $request->address = 'users:001';
    $request->async = true;
    $request->dryRun = true;
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->addMetadataToAccount($request);

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
| `$request`                                                                                                                 | [\formance\formance\Models\Operations\AddMetadataToAccountRequest](../../models/operations/AddMetadataToAccountRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\formance\formance\Models\Operations\AddMetadataToAccountResponse](../../models/operations/AddMetadataToAccountResponse.md)**


## countAccounts

Count the accounts from a ledger

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
    $request = new Operations\CountAccountsRequest();
    $request->address = 'users:.+';
    $request->ledger = 'ledger001';
    $request->metadata = new Operations\Metadata();

    $response = $sdk->ledger->countAccounts($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\formance\formance\Models\Operations\CountAccountsRequest](../../models/operations/CountAccountsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\formance\formance\Models\Operations\CountAccountsResponse](../../models/operations/CountAccountsResponse.md)**


## countTransactions

Count the transactions from a ledger

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
    $request = new Operations\CountTransactionsRequest();
    $request->account = 'users:001';
    $request->destination = 'users:001';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-20T09:59:27.603Z');
    $request->ledger = 'ledger001';
    $request->metadata = [
        'till' => 'string',
    ];
    $request->reference = 'ref:001';
    $request->source = 'users:001';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-16T00:36:33.819Z');

    $response = $sdk->ledger->countTransactions($request);

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
| `$request`                                                                                                           | [\formance\formance\Models\Operations\CountTransactionsRequest](../../models/operations/CountTransactionsRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\formance\formance\Models\Operations\CountTransactionsResponse](../../models/operations/CountTransactionsResponse.md)**


## createTransaction

Create a new transaction to a ledger

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
    $request = new Operations\CreateTransactionRequest();
    $request->idempotencyKey = 'string';
    $request->postTransaction = new Shared\PostTransaction();
    $request->postTransaction->metadata = [
        'before' => 'string',
    ];
    $request->postTransaction->postings = [
        new Shared\Posting(),
    ];
    $request->postTransaction->reference = 'ref:001';
    $request->postTransaction->script = new Shared\Script();
    $request->postTransaction->script->plain = 'vars {
    account $user
    }
    send [COIN 10] (
    	source = @world
    	destination = $user
    )
    ';
    $request->postTransaction->script->vars = new Shared\Vars();
    $request->postTransaction->timestamp = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-17T06:38:42.895Z');
    $request->async = true;
    $request->dryRun = true;
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->createTransaction($request);

    if ($response->createTransactionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\formance\formance\Models\Operations\CreateTransactionRequest](../../models/operations/CreateTransactionRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\formance\formance\Models\Operations\CreateTransactionResponse](../../models/operations/CreateTransactionResponse.md)**


## getAccount

Get account by its address

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
    $request = new Operations\GetAccountRequest();
    $request->address = 'users:001';
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->getAccount($request);

    if ($response->accountResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\formance\formance\Models\Operations\GetAccountRequest](../../models/operations/GetAccountRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\formance\formance\Models\Operations\GetAccountResponse](../../models/operations/GetAccountResponse.md)**


## getBalances

Get the balances from a ledger's account

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
    $request = new Operations\GetBalancesRequest();
    $request->address = 'users:001';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->ledger = 'ledger001';
    $request->pageSize = 755286;

    $response = $sdk->ledger->getBalances($request);

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

use \formance\formance;
use \formance\formance\Models\Shared;
use \formance\formance\Models\Operations;

$security = new Shared\Security();
$security->authorization = '';

$sdk = formance\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetBalancesAggregatedRequest();
    $request->address = 'users:001';
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->getBalancesAggregated($request);

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
$security->authorization = '';

$sdk = formance\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->ledger->getInfo();

    if ($response->configInfoResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\formance\formance\Models\Operations\GetInfoResponse](../../models/operations/GetInfoResponse.md)**


## getLedgerInfo

Get information about a ledger

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
    $request = new Operations\GetLedgerInfoRequest();
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->getLedgerInfo($request);

    if ($response->ledgerInfoResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\formance\formance\Models\Operations\GetLedgerInfoRequest](../../models/operations/GetLedgerInfoRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\formance\formance\Models\Operations\GetLedgerInfoResponse](../../models/operations/GetLedgerInfoResponse.md)**


## getTransaction

Get transaction from a ledger by its ID

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
    $request = new Operations\GetTransactionRequest();
    $request->ledger = 'ledger001';
    $request->txid = 1234;

    $response = $sdk->ledger->getTransaction($request);

    if ($response->getTransactionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\formance\formance\Models\Operations\GetTransactionRequest](../../models/operations/GetTransactionRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\formance\formance\Models\Operations\GetTransactionResponse](../../models/operations/GetTransactionResponse.md)**


## listAccounts

List accounts from a ledger, sorted by address in descending order.

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
    $request = new Operations\ListAccountsRequest();
    $request->address = 'users:.+';
    $request->balance = 2400;
    $request->balanceOperator = Operations\BalanceOperator::Gte;
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->ledger = 'ledger001';
    $request->metadata = [
        'glistening' => 'string',
    ];
    $request->pageSize = 412291;

    $response = $sdk->ledger->listAccounts($request);

    if ($response->accountsCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\formance\formance\Models\Operations\ListAccountsRequest](../../models/operations/ListAccountsRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\formance\formance\Models\Operations\ListAccountsResponse](../../models/operations/ListAccountsResponse.md)**


## listLogs

List the logs from a ledger, sorted by ID in descending order.

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
    $request = new Operations\ListLogsRequest();
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-04T05:10:40.788Z');
    $request->ledger = 'ledger001';
    $request->pageSize = 657242;
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-03T02:36:34.808Z');

    $response = $sdk->ledger->listLogs($request);

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


## listTransactions

List transactions from a ledger, sorted by txid in descending order.

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
    $request = new Operations\ListTransactionsRequest();
    $request->account = 'users:001';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->destination = 'users:001';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-08T16:09:19.098Z');
    $request->ledger = 'ledger001';
    $request->metadata = [
        'South' => 'string',
    ];
    $request->pageSize = 459510;
    $request->reference = 'ref:001';
    $request->source = 'users:001';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-19T18:05:01.432Z');

    $response = $sdk->ledger->listTransactions($request);

    if ($response->transactionsCursorResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\formance\formance\Models\Operations\ListTransactionsRequest](../../models/operations/ListTransactionsRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\formance\formance\Models\Operations\ListTransactionsResponse](../../models/operations/ListTransactionsResponse.md)**


## readStats

Get statistics from a ledger. (aggregate metrics on accounts and transactions)


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
    $request = new Operations\ReadStatsRequest();
    $request->ledger = 'ledger001';

    $response = $sdk->ledger->readStats($request);

    if ($response->statsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\formance\formance\Models\Operations\ReadStatsRequest](../../models/operations/ReadStatsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\formance\formance\Models\Operations\ReadStatsResponse](../../models/operations/ReadStatsResponse.md)**


## revertTransaction

Revert a ledger transaction by its ID

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
    $request = new Operations\RevertTransactionRequest();
    $request->ledger = 'ledger001';
    $request->txid = 1234;

    $response = $sdk->ledger->revertTransaction($request);

    if ($response->revertTransactionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\formance\formance\Models\Operations\RevertTransactionRequest](../../models/operations/RevertTransactionRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\formance\formance\Models\Operations\RevertTransactionResponse](../../models/operations/RevertTransactionResponse.md)**

