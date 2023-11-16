<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Operations;

use \formance\formance\Utils\SpeakeasyMetadata;
class GetHoldRequest
{
    /**
     * The hold ID
     * 
     * @var string $holdID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=holdID')]
    public string $holdID;
    
	public function __construct()
	{
		$this->holdID = "";
	}
}
