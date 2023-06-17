<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Shared;


class TaskWise
{
	#[\JMS\Serializer\Annotation\SerializedName('connectorId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $connectorId;
    
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('descriptor')]
    #[\JMS\Serializer\Annotation\Type('formance\formance\Models\Shared\TaskWiseDescriptor')]
    public TaskWiseDescriptor $descriptor;
    
	#[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $error = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('state')]
    #[\JMS\Serializer\Annotation\Type('formance\formance\Models\Shared\TaskWiseState')]
    public TaskWiseState $state;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<formance\formance\Models\Shared\PaymentStatus>')]
    public PaymentStatus $status;
    
	#[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
	public function __construct()
	{
		$this->connectorId = "";
		$this->createdAt = new \DateTime();
		$this->descriptor = new \formance\formance\Models\Shared\TaskWiseDescriptor();
		$this->error = null;
		$this->id = "";
		$this->state = new \formance\formance\Models\Shared\TaskWiseState();
		$this->status = \formance\formance\Models\Shared\PaymentStatus::Pending;
		$this->updatedAt = new \DateTime();
	}
}
