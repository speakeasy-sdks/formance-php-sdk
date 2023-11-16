<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance;

class Webhooks 
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
     * Activate one config
     * 
     * Activate a webhooks config by ID, to start receiving webhooks to its endpoint.
     * 
     * @param \formance\formance\Models\Operations\ActivateConfigRequest $request
     * @return \formance\formance\Models\Operations\ActivateConfigResponse
     */
	public function activateConfig(
        ?\formance\formance\Models\Operations\ActivateConfigRequest $request,
    ): \formance\formance\Models\Operations\ActivateConfigResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/webhooks/configs/{id}/activate', \formance\formance\Models\Operations\ActivateConfigRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \formance\formance\Models\Operations\ActivateConfigResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->configResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ConfigResponse', 'json');
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
     * Change the signing secret of a config
     * 
     * Change the signing secret of the endpoint of a webhooks config.
     * 
     * If not passed or empty, a secret is automatically generated.
     * The format is a random string of bytes of size 24, base64 encoded. (larger size after encoding)
     * 
     * 
     * @param \formance\formance\Models\Operations\ChangeConfigSecretRequest $request
     * @return \formance\formance\Models\Operations\ChangeConfigSecretResponse
     */
	public function changeConfigSecret(
        ?\formance\formance\Models\Operations\ChangeConfigSecretRequest $request,
    ): \formance\formance\Models\Operations\ChangeConfigSecretResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/webhooks/configs/{id}/secret/change', \formance\formance\Models\Operations\ChangeConfigSecretRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "configChangeSecret", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \formance\formance\Models\Operations\ChangeConfigSecretResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->configResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ConfigResponse', 'json');
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
     * Deactivate one config
     * 
     * Deactivate a webhooks config by ID, to stop receiving webhooks to its endpoint.
     * 
     * @param \formance\formance\Models\Operations\DeactivateConfigRequest $request
     * @return \formance\formance\Models\Operations\DeactivateConfigResponse
     */
	public function deactivateConfig(
        ?\formance\formance\Models\Operations\DeactivateConfigRequest $request,
    ): \formance\formance\Models\Operations\DeactivateConfigResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/webhooks/configs/{id}/deactivate', \formance\formance\Models\Operations\DeactivateConfigRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \formance\formance\Models\Operations\DeactivateConfigResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->configResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ConfigResponse', 'json');
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
     * Delete one config
     * 
     * Delete a webhooks config by ID.
     * 
     * @param \formance\formance\Models\Operations\DeleteConfigRequest $request
     * @return \formance\formance\Models\Operations\DeleteConfigResponse
     */
	public function deleteConfig(
        ?\formance\formance\Models\Operations\DeleteConfigRequest $request,
    ): \formance\formance\Models\Operations\DeleteConfigResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/webhooks/configs/{id}', \formance\formance\Models\Operations\DeleteConfigRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \formance\formance\Models\Operations\DeleteConfigResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
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
     * Get many configs
     * 
     * Sorted by updated date descending
     * 
     * @param \formance\formance\Models\Operations\GetManyConfigsRequest $request
     * @return \formance\formance\Models\Operations\GetManyConfigsResponse
     */
	public function getManyConfigs(
        ?\formance\formance\Models\Operations\GetManyConfigsRequest $request,
    ): \formance\formance\Models\Operations\GetManyConfigsResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/webhooks/configs');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\formance\Models\Operations\GetManyConfigsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \formance\formance\Models\Operations\GetManyConfigsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->configsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ConfigsResponse', 'json');
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
     * Insert a new config
     * 
     * Insert a new webhooks config.
     * 
     * The endpoint should be a valid https URL and be unique.
     * 
     * The secret is the endpoint's verification secret.
     * If not passed or empty, a secret is automatically generated.
     * The format is a random string of bytes of size 24, base64 encoded. (larger size after encoding)
     * 
     * All eventTypes are converted to lower-case when inserted.
     * 
     * 
     * @param \formance\formance\Models\Shared\ConfigUser $request
     * @return \formance\formance\Models\Operations\InsertConfigResponse
     */
	public function insertConfig(
        \formance\formance\Models\Shared\ConfigUser $request,
    ): \formance\formance\Models\Operations\InsertConfigResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/webhooks/configs');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \formance\formance\Models\Operations\InsertConfigResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->configResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ConfigResponse', 'json');
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
     * Test one config
     * 
     * Test a config by sending a webhook to its endpoint.
     * 
     * @param \formance\formance\Models\Operations\TestConfigRequest $request
     * @return \formance\formance\Models\Operations\TestConfigResponse
     */
	public function testConfig(
        ?\formance\formance\Models\Operations\TestConfigRequest $request,
    ): \formance\formance\Models\Operations\TestConfigResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/webhooks/configs/{id}/test', \formance\formance\Models\Operations\TestConfigRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \formance\formance\Models\Operations\TestConfigResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->attemptResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\AttemptResponse', 'json');
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