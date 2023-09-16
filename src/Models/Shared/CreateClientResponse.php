<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Shared;


class CreateClientResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('formance\formance\Models\Shared\Client')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Client $data = null;
    
	public function __construct()
	{
		$this->data = null;
	}
}
