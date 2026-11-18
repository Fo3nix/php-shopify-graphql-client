<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PriceListPriceUserError`.
 */
class ShopifyPriceListPriceUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The price list doesn't exist.
     */
    const PRICE_LIST_NOT_FOUND = "PRICE_LIST_NOT_FOUND";
    /**
     * The specified currency doesn't match the price list's currency.
     */
    const PRICE_LIST_CURRENCY_MISMATCH = "PRICE_LIST_CURRENCY_MISMATCH";
    /**
     * The issuance currency of a local currency gift card must match the price list currency.
     */
    const LOCAL_CURRENCY_GIFT_CARD_ISSUANCE_CURRENCY_MISMATCH = "LOCAL_CURRENCY_GIFT_CARD_ISSUANCE_CURRENCY_MISMATCH";
    /**
     * The price of a local currency gift card cannot exceed the maximum gift card purchase limit.
     */
    const LOCAL_CURRENCY_GIFT_CARD_LIMIT_EXCEEDED = "LOCAL_CURRENCY_GIFT_CARD_LIMIT_EXCEEDED";
    /**
     * A fixed price for the specified product variant doesn't exist.
     */
    const VARIANT_NOT_FOUND = "VARIANT_NOT_FOUND";
    /**
     * Only fixed prices can be deleted.
     */
    const PRICE_NOT_FIXED = "PRICE_NOT_FIXED";
}
