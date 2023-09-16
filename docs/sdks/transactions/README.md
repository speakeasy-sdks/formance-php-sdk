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

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\AddMetadataOnTransactionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new AddMetadataOnTransactionRequest();
    $request->idempotencyKey = 'cupiditate';
    $request->requestBody = [
        'quos' => 'perferendis',
    ];
    $request->async = true;
    $request->dryRun = true;
    $request->ledger = 'ledger001';
    $request->txid = 1234;

    $response = $sdk->transactions->addMetadataOnTransaction($request);

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


## countTransactions

Count the transactions from a ledger

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\CountTransactionsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CountTransactionsRequest();
    $request->account = 'users:001';
    $request->destination = 'users:001';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-04T10:29:07.095Z');
    $request->ledger = 'ledger001';
    $request->metadata = [
        'ipsam' => 'alias',
    ];
    $request->reference = 'ref:001';
    $request->source = 'users:001';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-28T14:19:37.294Z');

    $response = $sdk->transactions->countTransactions($request);

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

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\CreateTransactionRequest;
use \formance\formance\Models\Shared\PostTransaction;
use \formance\formance\Models\Shared\Posting;
use \formance\formance\Models\Shared\PostTransactionScript;
use \formance\formance\Models\Shared\PostTransactionScriptVars;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CreateTransactionRequest();
    $request->idempotencyKey = 'excepturi';
    $request->postTransaction = new PostTransaction();
    $request->postTransaction->metadata = [
        'tempora' => 'facilis',
    ];
    $request->postTransaction->postings = [
        new Posting(),
    ];
    $request->postTransaction->reference = 'ref:001';
    $request->postTransaction->script = new PostTransactionScript();
    $request->postTransaction->script->plain = 'vars {
    account $user
    }
    send [COIN 10] (
    	source = @world
    	destination = $user
    )
    ';
    $request->postTransaction->script->vars = new PostTransactionScriptVars();
    $request->postTransaction->timestamp = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-04T09:53:33.742Z');
    $request->async = true;
    $request->dryRun = true;
    $request->ledger = 'ledger001';

    $response = $sdk->transactions->createTransaction($request);

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


## getTransaction

Get transaction from a ledger by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\GetTransactionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetTransactionRequest();
    $request->ledger = 'ledger001';
    $request->txid = 1234;

    $response = $sdk->transactions->getTransaction($request);

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


## listTransactions

List transactions from a ledger, sorted by txid in descending order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\ListTransactionsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListTransactionsRequest();
    $request->account = 'users:001';
    $request->cursor = 'aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==';
    $request->destination = 'users:001';
    $request->endTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-09-13T13:11:22.288Z');
    $request->ledger = 'ledger001';
    $request->metadata = [
        'non' => 'eligendi',
    ];
    $request->pageSize = 576157;
    $request->reference = 'ref:001';
    $request->source = 'users:001';
    $request->startTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-29T21:42:45.399Z');

    $response = $sdk->transactions->listTransactions($request);

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


## revertTransaction

Revert a ledger transaction by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;
use \formance\formance\Models\Operations\RevertTransactionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RevertTransactionRequest();
    $request->ledger = 'ledger001';
    $request->txid = 1234;

    $response = $sdk->transactions->revertTransaction($request);

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

