<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `StoreCreditAccountCreditUserError`.
 */
class ShopifyStoreCreditAccountCreditUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The store credit account could not be found.
     */
    const ACCOUNT_NOT_FOUND = "ACCOUNT_NOT_FOUND";
    /**
     * Owner does not exist.
     */
    const OWNER_NOT_FOUND = "OWNER_NOT_FOUND";
    /**
     * A positive amount must be used to credit a store credit account.
     */
    const NEGATIVE_OR_ZERO_AMOUNT = "NEGATIVE_OR_ZERO_AMOUNT";
    /**
     * The currency provided does not match the currency of the store credit account.
     */
    const MISMATCHING_CURRENCY = "MISMATCHING_CURRENCY";
    /**
     * The expiry date must be in the future.
     */
    const EXPIRES_AT_IN_PAST = "EXPIRES_AT_IN_PAST";
    /**
     * The operation would cause the account's credit limit to be exceeded.
     */
    const CREDIT_LIMIT_EXCEEDED = "CREDIT_LIMIT_EXCEEDED";
    /**
     * The currency provided is not currently supported.
     */
    const UNSUPPORTED_CURRENCY = "UNSUPPORTED_CURRENCY";
}
