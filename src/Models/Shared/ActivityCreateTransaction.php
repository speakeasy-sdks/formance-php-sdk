<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Shared;


class ActivityCreateTransaction
{
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('formance\formance\Models\Shared\PostTransaction')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostTransaction $data = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('ledger')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ledger = null;
    
	public function __construct()
	{
		$this->data = null;
		$this->ledger = null;
	}
}
