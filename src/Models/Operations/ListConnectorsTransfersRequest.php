<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Operations;

use \formance\formance\Utils\SpeakeasyMetadata;
class ListConnectorsTransfersRequest
{
    /**
     * The name of the connector.
     * 
     * @var \formance\formance\Models\Shared\Connector $connector
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connector')]
    public \formance\formance\Models\Shared\Connector $connector;
    
	public function __construct()
	{
		$this->connector = \formance\formance\Models\Shared\Connector::Stripe;
	}
}
