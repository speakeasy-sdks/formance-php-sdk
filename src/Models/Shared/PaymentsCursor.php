<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Shared;


/**
 * PaymentsCursor - OK
 * 
 * @package formance\formance\Models\Shared
 * @access public
 */
class PaymentsCursor
{
	#[\JMS\Serializer\Annotation\SerializedName('cursor')]
    #[\JMS\Serializer\Annotation\Type('formance\formance\Models\Shared\PaymentsCursorCursor')]
    public PaymentsCursorCursor $cursor;
    
	public function __construct()
	{
		$this->cursor = new \formance\formance\Models\Shared\PaymentsCursorCursor();
	}
}
