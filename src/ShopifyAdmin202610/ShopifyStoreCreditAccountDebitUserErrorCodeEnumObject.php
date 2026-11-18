<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `StoreCreditAccountDebitUserError`.
 */
class ShopifyStoreCreditAccountDebitUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The store credit account could not be found.
     */
    const ACCOUNT_NOT_FOUND = "ACCOUNT_NOT_FOUND";
    /**
     * A positive amount must be used to debit a store credit account.
     */
    const NEGATIVE_OR_ZERO_AMOUNT = "NEGATIVE_OR_ZERO_AMOUNT";
    /**
     * The store credit account does not have sufficient funds to satisfy the request.
     */
    const INSUFFICIENT_FUNDS = "INSUFFICIENT_FUNDS";
    /**
     * The currency provided does not match the currency of the store credit account.
     */
    const MISMATCHING_CURRENCY = "MISMATCHING_CURRENCY";
}
