<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Shared;


class TaskStripeDescriptor
{
	#[\JMS\Serializer\Annotation\SerializedName('account')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $account;
    
	#[\JMS\Serializer\Annotation\SerializedName('main')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $main = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	public function __construct()
	{
		$this->account = "";
		$this->main = null;
		$this->name = "";
	}
}
