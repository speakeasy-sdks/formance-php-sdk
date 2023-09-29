<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance;

class Ledger 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Set the metadata of a transaction by its ID
     * 
     * @param \formance\formance\Models\Operations\AddMetadataOnTransactionRequest $request
     * @return \formance\formance\Models\Operations\AddMetadataOnTransactionResponse
     */
	public function addMetadataOnTransaction(
        ?\formance\formance\Models\Operations\AddMetadataOnTransactionRequest $request,
    ): \formance\formance\Models\Operations\AddMetadataOnTransactionResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/transactions/{txid}/metadata', \formance\formance\Models\Operations\AddMetadataOnTransactionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\formance\Models\Operations\AddMetadataOnTransactionRequest::class, $request, null));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\AddMetadataOnTransactionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Add metadata to an account
     * 
     * @param \formance\formance\Models\Operations\AddMetadataToAccountRequest $request
     * @return \formance\formance\Models\Operations\AddMetadataToAccountResponse
     */
	public function addMetadataToAccount(
        \formance\formance\Models\Operations\AddMetadataToAccountRequest $request,
    ): \formance\formance\Models\Operations\AddMetadataToAccountResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/accounts/{address}/metadata', \formance\formance\Models\Operations\AddMetadataToAccountRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\formance\Models\Operations\AddMetadataToAccountRequest::class, $request, null));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\AddMetadataToAccountResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Count the accounts from a ledger
     * 
     * @param \formance\formance\Models\Operations\CountAccountsRequest $request
     * @return \formance\formance\Models\Operations\CountAccountsResponse
     */
	public function countAccounts(
        ?\formance\formance\Models\Operations\CountAccountsRequest $request,
    ): \formance\formance\Models\Operations\CountAccountsResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/accounts', \formance\formance\Models\Operations\CountAccountsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\formance\Models\Operations\CountAccountsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('HEAD', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\CountAccountsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
            $response->headers = $httpResponse->getHeaders();
            
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Count the transactions from a ledger
     * 
     * @param \formance\formance\Models\Operations\CountTransactionsRequest $request
     * @return \formance\formance\Models\Operations\CountTransactionsResponse
     */
	public function countTransactions(
        ?\formance\formance\Models\Operations\CountTransactionsRequest $request,
    ): \formance\formance\Models\Operations\CountTransactionsResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/transactions', \formance\formance\Models\Operations\CountTransactionsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\formance\Models\Operations\CountTransactionsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('HEAD', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\CountTransactionsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
            $response->headers = $httpResponse->getHeaders();
            
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a new transaction to a ledger
     * 
     * @param \formance\formance\Models\Operations\CreateTransactionRequest $request
     * @return \formance\formance\Models\Operations\CreateTransactionResponse
     */
	public function createTransaction(
        \formance\formance\Models\Operations\CreateTransactionRequest $request,
    ): \formance\formance\Models\Operations\CreateTransactionResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/transactions', \formance\formance\Models\Operations\CreateTransactionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "postTransaction", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\formance\Models\Operations\CreateTransactionRequest::class, $request, null));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\CreateTransactionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createTransactionResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\CreateTransactionResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get account by its address
     * 
     * @param \formance\formance\Models\Operations\GetAccountRequest $request
     * @return \formance\formance\Models\Operations\GetAccountResponse
     */
	public function getAccount(
        ?\formance\formance\Models\Operations\GetAccountRequest $request,
    ): \formance\formance\Models\Operations\GetAccountResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/accounts/{address}', \formance\formance\Models\Operations\GetAccountRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\GetAccountResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\AccountResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get the balances from a ledger's account
     * 
     * @param \formance\formance\Models\Operations\GetBalancesRequest $request
     * @return \formance\formance\Models\Operations\GetBalancesResponse
     */
	public function getBalances(
        ?\formance\formance\Models\Operations\GetBalancesRequest $request,
    ): \formance\formance\Models\Operations\GetBalancesResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/balances', \formance\formance\Models\Operations\GetBalancesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\formance\Models\Operations\GetBalancesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\GetBalancesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->balancesCursorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\BalancesCursorResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get the aggregated balances from selected accounts
     * 
     * @param \formance\formance\Models\Operations\GetBalancesAggregatedRequest $request
     * @return \formance\formance\Models\Operations\GetBalancesAggregatedResponse
     */
	public function getBalancesAggregated(
        ?\formance\formance\Models\Operations\GetBalancesAggregatedRequest $request,
    ): \formance\formance\Models\Operations\GetBalancesAggregatedResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/aggregate/balances', \formance\formance\Models\Operations\GetBalancesAggregatedRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\formance\Models\Operations\GetBalancesAggregatedRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\GetBalancesAggregatedResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->aggregateBalancesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\AggregateBalancesResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Show server information
     * 
     * @return \formance\formance\Models\Operations\GetInfoResponse
     */
	public function getInfo(
    ): \formance\formance\Models\Operations\GetInfoResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/_info');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\GetInfoResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->configInfoResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ConfigInfoResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get information about a ledger
     * 
     * @param \formance\formance\Models\Operations\GetLedgerInfoRequest $request
     * @return \formance\formance\Models\Operations\GetLedgerInfoResponse
     */
	public function getLedgerInfo(
        ?\formance\formance\Models\Operations\GetLedgerInfoRequest $request,
    ): \formance\formance\Models\Operations\GetLedgerInfoResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/_info', \formance\formance\Models\Operations\GetLedgerInfoRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\GetLedgerInfoResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ledgerInfoResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\LedgerInfoResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get transaction from a ledger by its ID
     * 
     * @param \formance\formance\Models\Operations\GetTransactionRequest $request
     * @return \formance\formance\Models\Operations\GetTransactionResponse
     */
	public function getTransaction(
        ?\formance\formance\Models\Operations\GetTransactionRequest $request,
    ): \formance\formance\Models\Operations\GetTransactionResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/transactions/{txid}', \formance\formance\Models\Operations\GetTransactionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\GetTransactionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getTransactionResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\GetTransactionResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List accounts from a ledger
     * 
     * List accounts from a ledger, sorted by address in descending order.
     * 
     * @param \formance\formance\Models\Operations\ListAccountsRequest $request
     * @return \formance\formance\Models\Operations\ListAccountsResponse
     */
	public function listAccounts(
        ?\formance\formance\Models\Operations\ListAccountsRequest $request,
    ): \formance\formance\Models\Operations\ListAccountsResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/accounts', \formance\formance\Models\Operations\ListAccountsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\formance\Models\Operations\ListAccountsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\ListAccountsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountsCursorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\AccountsCursorResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List the logs from a ledger
     * 
     * List the logs from a ledger, sorted by ID in descending order.
     * 
     * @param \formance\formance\Models\Operations\ListLogsRequest $request
     * @return \formance\formance\Models\Operations\ListLogsResponse
     */
	public function listLogs(
        ?\formance\formance\Models\Operations\ListLogsRequest $request,
    ): \formance\formance\Models\Operations\ListLogsResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/logs', \formance\formance\Models\Operations\ListLogsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\formance\Models\Operations\ListLogsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\ListLogsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->logsCursorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\LogsCursorResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List transactions from a ledger
     * 
     * List transactions from a ledger, sorted by txid in descending order.
     * 
     * @param \formance\formance\Models\Operations\ListTransactionsRequest $request
     * @return \formance\formance\Models\Operations\ListTransactionsResponse
     */
	public function listTransactions(
        ?\formance\formance\Models\Operations\ListTransactionsRequest $request,
    ): \formance\formance\Models\Operations\ListTransactionsResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/transactions', \formance\formance\Models\Operations\ListTransactionsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\formance\Models\Operations\ListTransactionsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\ListTransactionsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->transactionsCursorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\TransactionsCursorResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get statistics from a ledger
     * 
     * Get statistics from a ledger. (aggregate metrics on accounts and transactions)
     * 
     * 
     * @param \formance\formance\Models\Operations\ReadStatsRequest $request
     * @return \formance\formance\Models\Operations\ReadStatsResponse
     */
	public function readStats(
        ?\formance\formance\Models\Operations\ReadStatsRequest $request,
    ): \formance\formance\Models\Operations\ReadStatsResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/stats', \formance\formance\Models\Operations\ReadStatsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\ReadStatsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->statsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\StatsResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Revert a ledger transaction by its ID
     * 
     * @param \formance\formance\Models\Operations\RevertTransactionRequest $request
     * @return \formance\formance\Models\Operations\RevertTransactionResponse
     */
	public function revertTransaction(
        ?\formance\formance\Models\Operations\RevertTransactionRequest $request,
    ): \formance\formance\Models\Operations\RevertTransactionResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/ledger/{ledger}/transactions/{txid}/revert', \formance\formance\Models\Operations\RevertTransactionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\RevertTransactionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->revertTransactionResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\RevertTransactionResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
}