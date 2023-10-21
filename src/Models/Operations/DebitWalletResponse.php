<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Operations;


class DebitWalletResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * Wallet successfully debited as a pending hold
     * 
     * @var ?\formance\formance\Models\Shared\DebitWalletResponse $debitWalletResponse
     */
	
    public ?\formance\formance\Models\Shared\DebitWalletResponse $debitWalletResponse = null;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Error
     * 
     * @var ?\formance\formance\Models\Shared\WalletsErrorResponse $walletsErrorResponse
     */
	
    public ?\formance\formance\Models\Shared\WalletsErrorResponse $walletsErrorResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->debitWalletResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->walletsErrorResponse = null;
	}
}
