<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Operations;


class ListPaymentsResponse
{
	
    public string $contentType;
    
    /**
     * OK
     * 
     * @var ?\formance\formance\Models\Shared\PaymentsCursor $paymentsCursor
     */
	
    public ?\formance\formance\Models\Shared\PaymentsCursor $paymentsCursor = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->paymentsCursor = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
