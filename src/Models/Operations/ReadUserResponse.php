<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Operations;


class ReadUserResponse
{
	
    public string $contentType;
    
    /**
     * Retrieved user
     * 
     * @var ?\formance\formance\Models\Shared\ReadUserResponse $readUserResponse
     */
	
    public ?\formance\formance\Models\Shared\ReadUserResponse $readUserResponse = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->readUserResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
