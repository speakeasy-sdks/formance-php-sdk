# Transactions


### Available Operations

* [addMetadataOnTransaction](#addmetadataontransaction) - Set the metadata of a transaction by its ID
* [countTransactions](#counttransactions) - Count the transactions from a ledger
* [createTransaction](#createtransaction) - Create a new transaction to a ledger
* [getTransaction](#gettransaction) - Get transaction from a ledger by its ID
* [listTransactions](#listtransactions) - List transactions from a ledger
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
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AddMetadataOnTransactionRequest();
    $request->idempotencyKey = '<value>';
    $request->requestBody = [
        'withdrawal' => '<value>',
    ];
    $request->async = true;
    $request->dryRun = true;
    $request->ledger = 'ledger001';
    $request->txid = 1234;;

    $response = $sdk->transactions->addMetadataOnTransaction($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                          | Type                                                                                                                               | Required                                                                                                                           | Description                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                         | [\formance\formance\Models\Operations\AddMetadataOnTransactionRequest](../../Models/Operations/AddMetadataOnTransactionRequest.md) | :heavy_check_mark:                                                                                                                 | The request object to use for the request.                                                                                         |


### Response

**[?\formance\formance\Models\Operations\AddMetadataOnTransactionResponse](../../Models/Operations/AddMetadataOnTransactionResponse.md)**


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
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CountTransactionsRequest();
    $request->account = 'users:001';
    $request->destination = 'users:001';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-20T14:23:01.272Z');
    $request->ledger = 'ledger001';
    $request->metadata = [
        'till' => '<value>',
    ];
    $request->reference = 'ref:001';
    $request->source = 'users:001';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-16T02:54:40.754Z');;

    $response = $sdk->transactions->countTransactions($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\formance\formance\Models\Operations\CountTransactionsRequest](../../Models/Operations/CountTransactionsRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\formance\formance\Models\Operations\CountTransactionsResponse](../../Models/Operations/CountTransactionsResponse.md)**


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
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateTransactionRequest();
    $request->idempotencyKey = '<value>';
    $request->postTransaction = new Shared\PostTransaction();
    $request->postTransaction->metadata = [
        'before' => '<value>',
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
    $request->postTransaction->timestamp = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-17T04:59:08.030Z');
    $request->async = true;
    $request->dryRun = true;
    $request->ledger = 'ledger001';;

    $response = $sdk->transactions->createTransaction($request);

    if ($response->createTransactionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\formance\formance\Models\Operations\CreateTransactionRequest](../../Models/Operations/CreateTransactionRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\formance\formance\Models\Operations\CreateTransactionResponse](../../Models/Operations/CreateTransactionResponse.md)**


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
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetTransactionRequest();
    $request->ledger = 'ledger001';
    $request->txid = 1234;;

    $response = $sdk->transactions->getTransaction($request);

    if ($response->getTransactionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\formance\formance\Models\Operations\GetTransactionRequest](../../Models/Operations/GetTransactionRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\formance\formance\Models\Operations\GetTransactionResponse](../../Models/Operations/GetTransactionResponse.md)**


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
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListTransactionsRequest();
    $request->account = 'users:001';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->destination = 'users:001';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-09T05:38:58.239Z');
    $request->ledger = 'ledger001';
    $request->metadata = [
        'South' => '<value>',
    ];
    $request->pageSize = 459510;
    $request->reference = 'ref:001';
    $request->source = 'users:001';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-19T19:47:16.501Z');;

    $response = $sdk->transactions->listTransactions($request);

    if ($response->transactionsCursorResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\formance\formance\Models\Operations\ListTransactionsRequest](../../Models/Operations/ListTransactionsRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\formance\formance\Models\Operations\ListTransactionsResponse](../../Models/Operations/ListTransactionsResponse.md)**


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
$security->authorization = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = formance\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RevertTransactionRequest();
    $request->ledger = 'ledger001';
    $request->txid = 1234;;

    $response = $sdk->transactions->revertTransaction($request);

    if ($response->revertTransactionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\formance\formance\Models\Operations\RevertTransactionRequest](../../Models/Operations/RevertTransactionRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\formance\formance\Models\Operations\RevertTransactionResponse](../../Models/Operations/RevertTransactionResponse.md)**

