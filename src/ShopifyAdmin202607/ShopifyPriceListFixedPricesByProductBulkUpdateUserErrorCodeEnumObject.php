<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PriceListFixedPricesByProductBulkUpdateUserError`.
 */
class ShopifyPriceListFixedPricesByProductBulkUpdateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * No update operations specified.
     */
    const NO_UPDATE_OPERATIONS_SPECIFIED = "NO_UPDATE_OPERATIONS_SPECIFIED";
    /**
     * The currency specified does not match the price list's currency.
     */
    const PRICES_TO_ADD_CURRENCY_MISMATCH = "PRICES_TO_ADD_CURRENCY_MISMATCH";
    /**
     * Price list does not exist.
     */
    const PRICE_LIST_DOES_NOT_EXIST = "PRICE_LIST_DOES_NOT_EXIST";
    /**
     * Duplicate ID in input.
     */
    const DUPLICATE_ID_IN_INPUT = "DUPLICATE_ID_IN_INPUT";
    /**
     * IDs must be mutually exclusive across add or delete operations.
     */
    const ID_MUST_BE_MUTUALLY_EXCLUSIVE = "ID_MUST_BE_MUTUALLY_EXCLUSIVE";
    /**
     * Product does not exist.
     */
    const PRODUCT_DOES_NOT_EXIST = "PRODUCT_DOES_NOT_EXIST";
    /**
     * Exceeded the 10000 prices to add limit.
     */
    const PRICE_LIMIT_EXCEEDED = "PRICE_LIMIT_EXCEEDED";
    /**
     * The issuance currency of a local currency gift card must match the price list currency.
     */
    const LOCAL_CURRENCY_GIFT_CARD_ISSUANCE_CURRENCY_MISMATCH = "LOCAL_CURRENCY_GIFT_CARD_ISSUANCE_CURRENCY_MISMATCH";
    /**
     * The price of a local currency gift card cannot exceed the maximum gift card purchase limit.
     */
    const LOCAL_CURRENCY_GIFT_CARD_LIMIT_EXCEEDED = "LOCAL_CURRENCY_GIFT_CARD_LIMIT_EXCEEDED";
}
