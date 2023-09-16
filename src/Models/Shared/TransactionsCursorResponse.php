<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Shared;


class TransactionsCursorResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('cursor')]
    #[\JMS\Serializer\Annotation\Type('formance\formance\Models\Shared\TransactionsCursorResponseCursor')]
    public TransactionsCursorResponseCursor $cursor;
    
	public function __construct()
	{
		$this->cursor = new \formance\formance\Models\Shared\TransactionsCursorResponseCursor();
	}
}
