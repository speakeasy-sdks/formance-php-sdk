<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance;

class Stats 
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

        $statusCode = $httpResponse->getStatusCode();

        $response = new \formance\formance\Models\Operations\ReadStatsResponse();
        $response->statusCode = $statusCode;
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
}