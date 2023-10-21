<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Operations;

use \formance\formance\Utils\SpeakeasyMetadata;
class RevertTransactionRequest
{
    /**
     * Name of the ledger.
     * 
     * @var string $ledger
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ledger')]
    public string $ledger;
    
    /**
     * Transaction ID.
     * 
     * @var int $txid
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=txid')]
    public int $txid;
    
	public function __construct()
	{
		$this->ledger = "";
		$this->txid = 0;
	}
}
