<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Shared;


class ConfigResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('formance\formance\Models\Shared\WebhooksConfig')]
    public WebhooksConfig $data;
    
	public function __construct()
	{
		$this->data = new \formance\formance\Models\Shared\WebhooksConfig();
	}
}
