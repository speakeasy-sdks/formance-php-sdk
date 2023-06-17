<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Operations;


class GetTransactionResponse
{
	
    public string $contentType;
    
    /**
     * Error
     * 
     * @var ?\formance\formance\Models\Shared\ErrorResponse $errorResponse
     */
	
    public ?\formance\formance\Models\Shared\ErrorResponse $errorResponse = null;
    
    /**
     * OK
     * 
     * @var ?\formance\formance\Models\Shared\GetTransactionResponse $getTransactionResponse
     */
	
    public ?\formance\formance\Models\Shared\GetTransactionResponse $getTransactionResponse = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->errorResponse = null;
		$this->getTransactionResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
