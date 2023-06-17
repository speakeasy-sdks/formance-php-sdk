<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Shared;


/**
 * ConfigInfoResponse - OK
 * 
 * @package formance\formance\Models\Shared
 * @access public
 */
class ConfigInfoResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('config')]
    #[\JMS\Serializer\Annotation\Type('formance\formance\Models\Shared\Config')]
    public Config $config;
    
	#[\JMS\Serializer\Annotation\SerializedName('server')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $server;
    
	#[\JMS\Serializer\Annotation\SerializedName('version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $version;
    
	public function __construct()
	{
		$this->config = new \formance\formance\Models\Shared\Config();
		$this->server = "";
		$this->version = "";
	}
}
