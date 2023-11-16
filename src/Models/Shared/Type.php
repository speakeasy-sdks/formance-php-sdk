<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\formance\Models\Shared;


enum Type: string
{
    case NewTransaction = 'NEW_TRANSACTION';
    case SetMetadata = 'SET_METADATA';
    case RevertedTransaction = 'REVERTED_TRANSACTION';
}
