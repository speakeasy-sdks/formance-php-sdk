<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance;

/**
 * SDK - Formance Stack API: Open, modular foundation for unique payments flows
 * 
 * 
 * # Introduction
 * This API is documented in **OpenAPI format**.
 * 
 * # Authentication
 * Formance Stack offers one forms of authentication:
 *   - OAuth2
 * OAuth2 - an open protocol to allow secure authorization in a simple
 * and standard method from web, mobile and desktop applications.
 * <SecurityDefinitions />
 * 
 * 
 * @package formance\formance
 * @access public
 */
class SDK
{
	public const SERVERS = [
        /** local server */
		'http://localhost',
        /** sandbox server */
		'https://{organization}.sandbox.formance.cloud',
	];
  	
	public Auth $auth;
	
	public Clients $clients;
	
	public Scopes $scopes;
	
	public Users $users;
	
	public Ledger $ledger;
	
	public Server $server;
	
	public Accounts $accounts;
	
	public Balances $balances;
	
	public Logs $logs;
	
	public Stats $stats;
	
	public Transactions $transactions;
	
	public Orchestration $orchestration;
	
	public Payments $payments;
	
	public Search $search;
	
	public Wallets $wallets;
	
	public Webhooks $webhooks;
		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return SDKBuilder
	 */
	public static function builder(): SDKBuilder
	{
		return new SDKBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
		
		$this->auth = new Auth($this->sdkConfiguration);
		
		$this->clients = new Clients($this->sdkConfiguration);
		
		$this->scopes = new Scopes($this->sdkConfiguration);
		
		$this->users = new Users($this->sdkConfiguration);
		
		$this->ledger = new Ledger($this->sdkConfiguration);
		
		$this->server = new Server($this->sdkConfiguration);
		
		$this->accounts = new Accounts($this->sdkConfiguration);
		
		$this->balances = new Balances($this->sdkConfiguration);
		
		$this->logs = new Logs($this->sdkConfiguration);
		
		$this->stats = new Stats($this->sdkConfiguration);
		
		$this->transactions = new Transactions($this->sdkConfiguration);
		
		$this->orchestration = new Orchestration($this->sdkConfiguration);
		
		$this->payments = new Payments($this->sdkConfiguration);
		
		$this->search = new Search($this->sdkConfiguration);
		
		$this->wallets = new Wallets($this->sdkConfiguration);
		
		$this->webhooks = new Webhooks($this->sdkConfiguration);
	}
	
    /**
     * Show stack version information
     * 
     * @return \formance\formance\Models\Operations\GetVersionsResponse
     */
	public function getVersions(
    ): \formance\formance\Models\Operations\GetVersionsResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/versions');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \formance\formance\Models\Operations\GetVersionsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getVersionsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\GetVersionsResponse', 'json');
            }
        }

        return $response;
    }
}