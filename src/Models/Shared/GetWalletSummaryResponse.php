<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Shared;


class GetWalletSummaryResponse
{
    /**
     * $availableFunds
     * 
     * @var array<string, int> $availableFunds
     */
	#[\JMS\Serializer\Annotation\SerializedName('availableFunds')]
    #[\JMS\Serializer\Annotation\Type('array<string, int>')]
    public array $availableFunds;
    
    /**
     * $balances
     * 
     * @var array<\formance\formance\Models\Shared\BalanceWithAssets> $balances
     */
	#[\JMS\Serializer\Annotation\SerializedName('balances')]
    #[\JMS\Serializer\Annotation\Type('array<formance\formance\Models\Shared\BalanceWithAssets>')]
    public array $balances;
    
    /**
     * $expirableFunds
     * 
     * @var array<string, int> $expirableFunds
     */
	#[\JMS\Serializer\Annotation\SerializedName('expirableFunds')]
    #[\JMS\Serializer\Annotation\Type('array<string, int>')]
    public array $expirableFunds;
    
    /**
     * $expiredFunds
     * 
     * @var array<string, int> $expiredFunds
     */
	#[\JMS\Serializer\Annotation\SerializedName('expiredFunds')]
    #[\JMS\Serializer\Annotation\Type('array<string, int>')]
    public array $expiredFunds;
    
    /**
     * $holdFunds
     * 
     * @var array<string, int> $holdFunds
     */
	#[\JMS\Serializer\Annotation\SerializedName('holdFunds')]
    #[\JMS\Serializer\Annotation\Type('array<string, int>')]
    public array $holdFunds;
    
	public function __construct()
	{
		$this->availableFunds = [];
		$this->balances = [];
		$this->expirableFunds = [];
		$this->expiredFunds = [];
		$this->holdFunds = [];
	}
}
