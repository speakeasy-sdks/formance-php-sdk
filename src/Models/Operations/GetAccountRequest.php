<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Operations;

use \formance\formance\Utils\SpeakeasyMetadata;
class GetAccountRequest
{
    /**
     * Exact address of the account. It must match the following regular expressions pattern:
     * 
     * ```
     * ^\w+(:\w+)*$
     * ```
     * 
     * 
     * @var string $address
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=address')]
    public string $address;
    
    /**
     * Name of the ledger.
     * 
     * @var string $ledger
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public string $ledger;
    
	public function __construct()
	{
		$this->address = "";
		$this->ledger = "";
	}
}
