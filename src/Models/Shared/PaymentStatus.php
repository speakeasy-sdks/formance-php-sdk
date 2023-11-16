<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Shared;


enum PaymentStatus: string
{
    case Pending = 'PENDING';
    case Active = 'ACTIVE';
    case Terminated = 'TERMINATED';
    case Failed = 'FAILED';
    case Succeeded = 'SUCCEEDED';
    case Cancelled = 'CANCELLED';
}
