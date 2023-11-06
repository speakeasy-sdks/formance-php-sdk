<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Shared;


class ListRunsResponse
{
    /**
     * $data
     * 
     * @var array<\formance\formance\Models\Shared\WorkflowInstance> $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<formance\formance\Models\Shared\WorkflowInstance>')]
    public array $data;
    
	public function __construct()
	{
		$this->data = [];
	}
}
