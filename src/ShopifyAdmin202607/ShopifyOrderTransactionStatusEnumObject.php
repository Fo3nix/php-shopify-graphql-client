<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The different states that an `OrderTransaction` can have.
 */
class ShopifyOrderTransactionStatusEnumObject extends EnumObject
{
    /**
     * The transaction succeeded.
     */
    const SUCCESS = "SUCCESS";
    /**
     * The transaction failed.
     */
    const FAILURE = "FAILURE";
    /**
     * The transaction is pending.
     */
    const PENDING = "PENDING";
    /**
     * There was an error while processing the transaction.
     */
    const ERROR = "ERROR";
    /**
     * Awaiting a response.
     */
    const AWAITING_RESPONSE = "AWAITING_RESPONSE";
    /**
     * The transaction status is unknown.
     */
    const UNKNOWN = "UNKNOWN";
}
