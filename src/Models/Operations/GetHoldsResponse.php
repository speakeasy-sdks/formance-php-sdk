<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Operations;


class GetHoldsResponse
{
	
    public string $contentType;
    
    /**
     * Holds
     * 
     * @var ?\formance\formance\Models\Shared\GetHoldsResponse $getHoldsResponse
     */
	
    public ?\formance\formance\Models\Shared\GetHoldsResponse $getHoldsResponse = null;
    
	
    public int $statusCode;
    
	
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
		$this->getHoldsResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->walletsErrorResponse = null;
	}
}
