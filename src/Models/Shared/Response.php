<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Shared;


class Response
{
	#[\JMS\Serializer\Annotation\SerializedName('cursor')]
    #[\JMS\Serializer\Annotation\Type('formance\formance\Models\Shared\ResponseCursor')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ResponseCursor $cursor = null;
    
    /**
     * The payload
     * 
     * @var ?\formance\formance\Models\Shared\ResponseData $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('formance\formance\Models\Shared\ResponseData')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ResponseData $data = null;
    
	public function __construct()
	{
		$this->cursor = null;
		$this->data = null;
	}
}
