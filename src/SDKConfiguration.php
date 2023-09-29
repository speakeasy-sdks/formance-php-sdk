<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	public ?Models\Shared\Security $security = null;
	public string $serverUrl = '';
	public int $serverIndex = 0;
	/** @var array<array<string, string>> */
	public ?array $serverDefaults = [
		[
		],
		[
			'organization' => '',
		],
	];
	public string $language = 'php';
	public string $openapiDocVersion = 'v1.0.20230614';
	public string $sdkVersion = '1.6.0';
	public string $genVersion = '2.139.1';
	public string $userAgent = 'speakeasy-sdk/php 1.6.0 2.139.1 v1.0.20230614 formance/formance';
	

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		};
		return SDK::SERVERS[$this->serverIndex];
	}
	
	/**
	 * @return array<string, string>
	 */
	public function getServerDefaults(): ?array
	{
		return $this->serverDefaults[$this->serverIndex];
	}
}