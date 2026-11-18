<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `TaxSummaryCreateUserError`.
 */
class ShopifyTaxSummaryCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * No order was not found.
     */
    const ORDER_NOT_FOUND = "ORDER_NOT_FOUND";
    /**
     * There was an error during enqueueing of the tax summary creation job(s).
     */
    const GENERAL_ERROR = "GENERAL_ERROR";
}
