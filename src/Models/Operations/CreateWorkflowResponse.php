<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Operations;


class CreateWorkflowResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * Created workflow
     * 
     * @var ?\formance\formance\Models\Shared\CreateWorkflowResponse $createWorkflowResponse
     */
	
    public ?\formance\formance\Models\Shared\CreateWorkflowResponse $createWorkflowResponse = null;
    
    /**
     * General error
     * 
     * @var ?\formance\formance\Models\Shared\Error $error
     */
	
    public ?\formance\formance\Models\Shared\Error $error = null;
    
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
    
	public function __construct()
	{
		$this->contentType = "";
		$this->createWorkflowResponse = null;
		$this->error = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
