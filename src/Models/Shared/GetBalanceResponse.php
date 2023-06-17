<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Shared;


/**
 * GetBalanceResponse - Balance summary
 * 
 * @package formance\formance\Models\Shared
 * @access public
 */
class GetBalanceResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('formance\formance\Models\Shared\BalanceWithAssets')]
    public BalanceWithAssets $data;
    
	public function __construct()
	{
		$this->data = new \formance\formance\Models\Shared\BalanceWithAssets();
	}
}
