<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `GiftCardTransactionUserError`.
 */
class ShopifyGiftCardTransactionUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * Unexpected internal error happened.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * The gift card's value exceeds the allowed limits.
     */
    const GIFT_CARD_LIMIT_EXCEEDED = "GIFT_CARD_LIMIT_EXCEEDED";
    /**
     * The gift card could not be found.
     */
    const GIFT_CARD_NOT_FOUND = "GIFT_CARD_NOT_FOUND";
    /**
     * A positive amount must be used.
     */
    const NEGATIVE_OR_ZERO_AMOUNT = "NEGATIVE_OR_ZERO_AMOUNT";
    /**
     * The gift card does not have sufficient funds to satisfy the request.
     */
    const INSUFFICIENT_FUNDS = "INSUFFICIENT_FUNDS";
    /**
     * The currency provided does not match the currency of the gift card.
     */
    const MISMATCHING_CURRENCY = "MISMATCHING_CURRENCY";
}
