<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Operations;


class ListWalletsResponse
{
	
    public string $contentType;
    
    /**
     * OK
     * 
     * @var ?\formance\formance\Models\Shared\ListWalletsResponse $listWalletsResponse
     */
	
    public ?\formance\formance\Models\Shared\ListWalletsResponse $listWalletsResponse = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->listWalletsResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
