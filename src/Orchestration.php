<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance;

class Orchestration 
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
     * Cancel a running workflow
     * 
     * Cancel a running workflow
     * 
     * @param \formance\formance\Models\Operations\CancelEventRequest $request
     * @return \formance\formance\Models\Operations\CancelEventResponse
     */
	public function cancelEvent(
        ?\formance\formance\Models\Operations\CancelEventRequest $request,
    ): \formance\formance\Models\Operations\CancelEventResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/instances/{instanceID}/abort', \formance\formance\Models\Operations\CancelEventRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\CancelEventResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create workflow
     * 
     * Create a workflow
     * 
     * @param \formance\formance\Models\Shared\CreateWorkflowRequest $request
     * @return \formance\formance\Models\Operations\CreateWorkflowResponse
     */
	public function createWorkflow(
        ?\formance\formance\Models\Shared\CreateWorkflowRequest $request,
    ): \formance\formance\Models\Operations\CreateWorkflowResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/workflows');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\CreateWorkflowResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createWorkflowResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\CreateWorkflowResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a workflow instance by id
     * 
     * Get a workflow instance by id
     * 
     * @param \formance\formance\Models\Operations\GetInstanceRequest $request
     * @return \formance\formance\Models\Operations\GetInstanceResponse
     */
	public function getInstance(
        ?\formance\formance\Models\Operations\GetInstanceRequest $request,
    ): \formance\formance\Models\Operations\GetInstanceResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/instances/{instanceID}', \formance\formance\Models\Operations\GetInstanceRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\GetInstanceResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWorkflowInstanceResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\GetWorkflowInstanceResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a workflow instance history by id
     * 
     * Get a workflow instance history by id
     * 
     * @param \formance\formance\Models\Operations\GetInstanceHistoryRequest $request
     * @return \formance\formance\Models\Operations\GetInstanceHistoryResponse
     */
	public function getInstanceHistory(
        ?\formance\formance\Models\Operations\GetInstanceHistoryRequest $request,
    ): \formance\formance\Models\Operations\GetInstanceHistoryResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/instances/{instanceID}/history', \formance\formance\Models\Operations\GetInstanceHistoryRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\GetInstanceHistoryResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWorkflowInstanceHistoryResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\GetWorkflowInstanceHistoryResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a workflow instance stage history
     * 
     * Get a workflow instance stage history
     * 
     * @param \formance\formance\Models\Operations\GetInstanceStageHistoryRequest $request
     * @return \formance\formance\Models\Operations\GetInstanceStageHistoryResponse
     */
	public function getInstanceStageHistory(
        ?\formance\formance\Models\Operations\GetInstanceStageHistoryRequest $request,
    ): \formance\formance\Models\Operations\GetInstanceStageHistoryResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/instances/{instanceID}/stages/{number}/history', \formance\formance\Models\Operations\GetInstanceStageHistoryRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\GetInstanceStageHistoryResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWorkflowInstanceHistoryStageResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\GetWorkflowInstanceHistoryStageResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a flow by id
     * 
     * Get a flow by id
     * 
     * @param \formance\formance\Models\Operations\GetWorkflowRequest $request
     * @return \formance\formance\Models\Operations\GetWorkflowResponse
     */
	public function getWorkflow(
        ?\formance\formance\Models\Operations\GetWorkflowRequest $request,
    ): \formance\formance\Models\Operations\GetWorkflowResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/workflows/{flowId}', \formance\formance\Models\Operations\GetWorkflowRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\GetWorkflowResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWorkflowResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\GetWorkflowResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List instances of a workflow
     * 
     * List instances of a workflow
     * 
     * @param \formance\formance\Models\Operations\ListInstancesRequest $request
     * @return \formance\formance\Models\Operations\ListInstancesResponse
     */
	public function listInstances(
        ?\formance\formance\Models\Operations\ListInstancesRequest $request,
    ): \formance\formance\Models\Operations\ListInstancesResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/instances');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\formance\Models\Operations\ListInstancesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\ListInstancesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listRunsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ListRunsResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List registered workflows
     * 
     * List registered workflows
     * 
     * @return \formance\formance\Models\Operations\ListWorkflowsResponse
     */
	public function listWorkflows(
    ): \formance\formance\Models\Operations\ListWorkflowsResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/workflows');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\ListWorkflowsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listWorkflowsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ListWorkflowsResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get server info
     * 
     * @return \formance\formance\Models\Operations\OrchestrationgetServerInfoResponse
     */
	public function orchestrationgetServerInfo(
    ): \formance\formance\Models\Operations\OrchestrationgetServerInfoResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/_info');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\OrchestrationgetServerInfoResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->serverInfo = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\ServerInfo', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Run workflow
     * 
     * Run workflow
     * 
     * @param \formance\formance\Models\Operations\RunWorkflowRequest $request
     * @return \formance\formance\Models\Operations\RunWorkflowResponse
     */
	public function runWorkflow(
        ?\formance\formance\Models\Operations\RunWorkflowRequest $request,
    ): \formance\formance\Models\Operations\RunWorkflowResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/workflows/{workflowID}/instances', \formance\formance\Models\Operations\RunWorkflowRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\formance\formance\Models\Operations\RunWorkflowRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\RunWorkflowResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->runWorkflowResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\RunWorkflowResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Send an event to a running workflow
     * 
     * Send an event to a running workflow
     * 
     * @param \formance\formance\Models\Operations\SendEventRequest $request
     * @return \formance\formance\Models\Operations\SendEventResponse
     */
	public function sendEvent(
        ?\formance\formance\Models\Operations\SendEventRequest $request,
    ): \formance\formance\Models\Operations\SendEventResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/api/orchestration/instances/{instanceID}/events', \formance\formance\Models\Operations\SendEventRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \formance\formance\Models\Operations\SendEventResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'formance\formance\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
}