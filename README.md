# formance/formance

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/formance-php-sdk.git"
        }
    ],
    "require": {
        "formance/formance": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \formance\formance\SDK;
use \formance\formance\Models\Shared\Security;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->getVersions();

    if ($response->getVersionsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## Available Resources and Operations

### [SDK](docs/sdks/sdk/README.md)

* [getVersions](docs/sdks/sdk/README.md#getversions) - Show stack version information

### [Accounts](docs/sdks/accounts/README.md)

* [addMetadataToAccount](docs/sdks/accounts/README.md#addmetadatatoaccount) - Add metadata to an account
* [countAccounts](docs/sdks/accounts/README.md#countaccounts) - Count the accounts from a ledger
* [getAccount](docs/sdks/accounts/README.md#getaccount) - Get account by its address
* [listAccounts](docs/sdks/accounts/README.md#listaccounts) - List accounts from a ledger

### [Auth](docs/sdks/auth/README.md)

* [addScopeToClient](docs/sdks/auth/README.md#addscopetoclient) - Add scope to client
* [addTransientScope](docs/sdks/auth/README.md#addtransientscope) - Add a transient scope to a scope
* [createClient](docs/sdks/auth/README.md#createclient) - Create client
* [createScope](docs/sdks/auth/README.md#createscope) - Create scope
* [createSecret](docs/sdks/auth/README.md#createsecret) - Add a secret to a client
* [deleteClient](docs/sdks/auth/README.md#deleteclient) - Delete client
* [deleteScope](docs/sdks/auth/README.md#deletescope) - Delete scope
* [deleteScopeFromClient](docs/sdks/auth/README.md#deletescopefromclient) - Delete scope from client
* [deleteSecret](docs/sdks/auth/README.md#deletesecret) - Delete a secret from a client
* [deleteTransientScope](docs/sdks/auth/README.md#deletetransientscope) - Delete a transient scope from a scope
* [getServerInfo](docs/sdks/auth/README.md#getserverinfo) - Get server info
* [listClients](docs/sdks/auth/README.md#listclients) - List clients
* [listScopes](docs/sdks/auth/README.md#listscopes) - List scopes
* [listUsers](docs/sdks/auth/README.md#listusers) - List users
* [readClient](docs/sdks/auth/README.md#readclient) - Read client
* [readScope](docs/sdks/auth/README.md#readscope) - Read scope
* [readUser](docs/sdks/auth/README.md#readuser) - Read user
* [updateClient](docs/sdks/auth/README.md#updateclient) - Update client
* [updateScope](docs/sdks/auth/README.md#updatescope) - Update scope

### [Balances](docs/sdks/balances/README.md)

* [getBalances](docs/sdks/balances/README.md#getbalances) - Get the balances from a ledger's account
* [getBalancesAggregated](docs/sdks/balances/README.md#getbalancesaggregated) - Get the aggregated balances from selected accounts

### [Clients](docs/sdks/clients/README.md)

* [addScopeToClient](docs/sdks/clients/README.md#addscopetoclient) - Add scope to client
* [createClient](docs/sdks/clients/README.md#createclient) - Create client
* [createSecret](docs/sdks/clients/README.md#createsecret) - Add a secret to a client
* [deleteClient](docs/sdks/clients/README.md#deleteclient) - Delete client
* [deleteScopeFromClient](docs/sdks/clients/README.md#deletescopefromclient) - Delete scope from client
* [deleteSecret](docs/sdks/clients/README.md#deletesecret) - Delete a secret from a client
* [listClients](docs/sdks/clients/README.md#listclients) - List clients
* [readClient](docs/sdks/clients/README.md#readclient) - Read client
* [updateClient](docs/sdks/clients/README.md#updateclient) - Update client

### [Ledger](docs/sdks/ledger/README.md)

* [addMetadataOnTransaction](docs/sdks/ledger/README.md#addmetadataontransaction) - Set the metadata of a transaction by its ID
* [addMetadataToAccount](docs/sdks/ledger/README.md#addmetadatatoaccount) - Add metadata to an account
* [countAccounts](docs/sdks/ledger/README.md#countaccounts) - Count the accounts from a ledger
* [countTransactions](docs/sdks/ledger/README.md#counttransactions) - Count the transactions from a ledger
* [createTransaction](docs/sdks/ledger/README.md#createtransaction) - Create a new transaction to a ledger
* [getAccount](docs/sdks/ledger/README.md#getaccount) - Get account by its address
* [getBalances](docs/sdks/ledger/README.md#getbalances) - Get the balances from a ledger's account
* [getBalancesAggregated](docs/sdks/ledger/README.md#getbalancesaggregated) - Get the aggregated balances from selected accounts
* [getInfo](docs/sdks/ledger/README.md#getinfo) - Show server information
* [getLedgerInfo](docs/sdks/ledger/README.md#getledgerinfo) - Get information about a ledger
* [getTransaction](docs/sdks/ledger/README.md#gettransaction) - Get transaction from a ledger by its ID
* [listAccounts](docs/sdks/ledger/README.md#listaccounts) - List accounts from a ledger
* [listLogs](docs/sdks/ledger/README.md#listlogs) - List the logs from a ledger
* [listTransactions](docs/sdks/ledger/README.md#listtransactions) - List transactions from a ledger
* [readStats](docs/sdks/ledger/README.md#readstats) - Get statistics from a ledger
* [revertTransaction](docs/sdks/ledger/README.md#reverttransaction) - Revert a ledger transaction by its ID

### [Logs](docs/sdks/logs/README.md)

* [listLogs](docs/sdks/logs/README.md#listlogs) - List the logs from a ledger

### [Orchestration](docs/sdks/orchestration/README.md)

* [cancelEvent](docs/sdks/orchestration/README.md#cancelevent) - Cancel a running workflow
* [createWorkflow](docs/sdks/orchestration/README.md#createworkflow) - Create workflow
* [getInstance](docs/sdks/orchestration/README.md#getinstance) - Get a workflow instance by id
* [getInstanceHistory](docs/sdks/orchestration/README.md#getinstancehistory) - Get a workflow instance history by id
* [getInstanceStageHistory](docs/sdks/orchestration/README.md#getinstancestagehistory) - Get a workflow instance stage history
* [getWorkflow](docs/sdks/orchestration/README.md#getworkflow) - Get a flow by id
* [listInstances](docs/sdks/orchestration/README.md#listinstances) - List instances of a workflow
* [listWorkflows](docs/sdks/orchestration/README.md#listworkflows) - List registered workflows
* [orchestrationgetServerInfo](docs/sdks/orchestration/README.md#orchestrationgetserverinfo) - Get server info
* [runWorkflow](docs/sdks/orchestration/README.md#runworkflow) - Run workflow
* [sendEvent](docs/sdks/orchestration/README.md#sendevent) - Send an event to a running workflow

### [Payments](docs/sdks/payments/README.md)

* [connectorsStripeTransfer](docs/sdks/payments/README.md#connectorsstripetransfer) - Transfer funds between Stripe accounts
* [connectorsTransfer](docs/sdks/payments/README.md#connectorstransfer) - Transfer funds between Connector accounts
* [getConnectorTask](docs/sdks/payments/README.md#getconnectortask) - Read a specific task of the connector
* [getPayment](docs/sdks/payments/README.md#getpayment) - Get a payment
* [installConnector](docs/sdks/payments/README.md#installconnector) - Install a connector
* [listAllConnectors](docs/sdks/payments/README.md#listallconnectors) - List all installed connectors
* [listConfigsAvailableConnectors](docs/sdks/payments/README.md#listconfigsavailableconnectors) - List the configs of each available connector
* [listConnectorTasks](docs/sdks/payments/README.md#listconnectortasks) - List tasks from a connector
* [listConnectorsTransfers](docs/sdks/payments/README.md#listconnectorstransfers) - List transfers and their statuses
* [listPayments](docs/sdks/payments/README.md#listpayments) - List payments
* [paymentsgetServerInfo](docs/sdks/payments/README.md#paymentsgetserverinfo) - Get server info
* [paymentslistAccounts](docs/sdks/payments/README.md#paymentslistaccounts) - List accounts
* [readConnectorConfig](docs/sdks/payments/README.md#readconnectorconfig) - Read the config of a connector
* [resetConnector](docs/sdks/payments/README.md#resetconnector) - Reset a connector
* [uninstallConnector](docs/sdks/payments/README.md#uninstallconnector) - Uninstall a connector
* [updateMetadata](docs/sdks/payments/README.md#updatemetadata) - Update metadata

### [Scopes](docs/sdks/scopes/README.md)

* [addTransientScope](docs/sdks/scopes/README.md#addtransientscope) - Add a transient scope to a scope
* [createScope](docs/sdks/scopes/README.md#createscope) - Create scope
* [deleteScope](docs/sdks/scopes/README.md#deletescope) - Delete scope
* [deleteTransientScope](docs/sdks/scopes/README.md#deletetransientscope) - Delete a transient scope from a scope
* [listScopes](docs/sdks/scopes/README.md#listscopes) - List scopes
* [readScope](docs/sdks/scopes/README.md#readscope) - Read scope
* [updateScope](docs/sdks/scopes/README.md#updatescope) - Update scope

### [Search](docs/sdks/search/README.md)

* [search](docs/sdks/search/README.md#search) - Search
* [searchgetServerInfo](docs/sdks/search/README.md#searchgetserverinfo) - Get server info

### [Server](docs/sdks/server/README.md)

* [getInfo](docs/sdks/server/README.md#getinfo) - Show server information

### [Stats](docs/sdks/stats/README.md)

* [readStats](docs/sdks/stats/README.md#readstats) - Get statistics from a ledger

### [Transactions](docs/sdks/transactions/README.md)

* [addMetadataOnTransaction](docs/sdks/transactions/README.md#addmetadataontransaction) - Set the metadata of a transaction by its ID
* [countTransactions](docs/sdks/transactions/README.md#counttransactions) - Count the transactions from a ledger
* [createTransaction](docs/sdks/transactions/README.md#createtransaction) - Create a new transaction to a ledger
* [getTransaction](docs/sdks/transactions/README.md#gettransaction) - Get transaction from a ledger by its ID
* [listTransactions](docs/sdks/transactions/README.md#listtransactions) - List transactions from a ledger
* [revertTransaction](docs/sdks/transactions/README.md#reverttransaction) - Revert a ledger transaction by its ID

### [Users](docs/sdks/users/README.md)

* [listUsers](docs/sdks/users/README.md#listusers) - List users
* [readUser](docs/sdks/users/README.md#readuser) - Read user

### [Wallets](docs/sdks/wallets/README.md)

* [confirmHold](docs/sdks/wallets/README.md#confirmhold) - Confirm a hold
* [createBalance](docs/sdks/wallets/README.md#createbalance) - Create a balance
* [createWallet](docs/sdks/wallets/README.md#createwallet) - Create a new wallet
* [creditWallet](docs/sdks/wallets/README.md#creditwallet) - Credit a wallet
* [debitWallet](docs/sdks/wallets/README.md#debitwallet) - Debit a wallet
* [getBalance](docs/sdks/wallets/README.md#getbalance) - Get detailed balance
* [getHold](docs/sdks/wallets/README.md#gethold) - Get a hold
* [getHolds](docs/sdks/wallets/README.md#getholds) - Get all holds for a wallet
* [getTransactions](docs/sdks/wallets/README.md#gettransactions)
* [getWallet](docs/sdks/wallets/README.md#getwallet) - Get a wallet
* [getWalletSummary](docs/sdks/wallets/README.md#getwalletsummary) - Get wallet summary
* [listBalances](docs/sdks/wallets/README.md#listbalances) - List balances of a wallet
* [listWallets](docs/sdks/wallets/README.md#listwallets) - List all wallets
* [updateWallet](docs/sdks/wallets/README.md#updatewallet) - Update a wallet
* [voidHold](docs/sdks/wallets/README.md#voidhold) - Cancel a hold
* [walletsgetServerInfo](docs/sdks/wallets/README.md#walletsgetserverinfo) - Get server info

### [Webhooks](docs/sdks/webhooks/README.md)

* [activateConfig](docs/sdks/webhooks/README.md#activateconfig) - Activate one config
* [changeConfigSecret](docs/sdks/webhooks/README.md#changeconfigsecret) - Change the signing secret of a config
* [deactivateConfig](docs/sdks/webhooks/README.md#deactivateconfig) - Deactivate one config
* [deleteConfig](docs/sdks/webhooks/README.md#deleteconfig) - Delete one config
* [getManyConfigs](docs/sdks/webhooks/README.md#getmanyconfigs) - Get many configs
* [insertConfig](docs/sdks/webhooks/README.md#insertconfig) - Insert a new config
* [testConfig](docs/sdks/webhooks/README.md#testconfig) - Test one config
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release !

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
