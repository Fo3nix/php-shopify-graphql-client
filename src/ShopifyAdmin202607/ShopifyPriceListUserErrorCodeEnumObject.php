<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PriceListUserError`.
 */
class ShopifyPriceListUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The input value isn't included in the list.
     */
    const INCLUSION = "INCLUSION";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The specified price list doesn't exist.
     */
    const PRICE_LIST_NOT_FOUND = "PRICE_LIST_NOT_FOUND";
    /**
     * The price list is currently being modified. Please try again later.
     */
    const PRICE_LIST_LOCKED = "PRICE_LIST_LOCKED";
    /**
     * A price list’s currency must be the market currency.
     */
    const CURRENCY_MARKET_MISMATCH = "CURRENCY_MARKET_MISMATCH";
    /**
     * The adjustment value must be a positive value and not be greater than 100% for `type` `PERCENTAGE_DECREASE` and not be greater than 1000% for `type` `PERCENTAGE_INCREASE`.
     */
    const INVALID_ADJUSTMENT_VALUE = "INVALID_ADJUSTMENT_VALUE";
    /**
     * The adjustment value must not be greater than 100% for `type` `PERCENTAGE_DECREASE`.
     */
    const INVALID_ADJUSTMENT_MIN_VALUE = "INVALID_ADJUSTMENT_MIN_VALUE";
    /**
     * The adjustment value must not be greater than 1000% for `type` `PERCENTAGE_INCREASE`.
     */
    const INVALID_ADJUSTMENT_MAX_VALUE = "INVALID_ADJUSTMENT_MAX_VALUE";
    /**
     * Quantity rules can be associated only with company location catalogs or catalogs associated with compatible markets.
     */
    const CATALOG_CONTEXT_DOES_NOT_SUPPORT_QUANTITY_RULES = "CATALOG_CONTEXT_DOES_NOT_SUPPORT_QUANTITY_RULES";
    /**
     * Quantity price breaks can be associated only with company location catalogs or catalogs associated with compatible markets.
     */
    const CATALOG_CONTEXT_DOES_NOT_SUPPORT_QUANTITY_PRICE_BREAKS = "CATALOG_CONTEXT_DOES_NOT_SUPPORT_QUANTITY_PRICE_BREAKS";
    /**
     * Only one context rule option may be specified.
     */
    const CONTEXT_RULE_LIMIT_ONE_OPTION = "CONTEXT_RULE_LIMIT_ONE_OPTION";
    /**
     * The price list currency is not supported by the shop's payment gateway.
     */
    const CURRENCY_NOT_SUPPORTED = "CURRENCY_NOT_SUPPORTED";
    /**
     * Cannot create price list for a primary market.
     */
    const PRICE_LIST_NOT_ALLOWED_FOR_PRIMARY_MARKET = "PRICE_LIST_NOT_ALLOWED_FOR_PRIMARY_MARKET";
    /**
     * The specified catalog does not exist.
     */
    const CATALOG_DOES_NOT_EXIST = "CATALOG_DOES_NOT_EXIST";
    /**
     * The price list currency must match the market catalog currency.
     */
    const CATALOG_MARKET_AND_PRICE_LIST_CURRENCY_MISMATCH = "CATALOG_MARKET_AND_PRICE_LIST_CURRENCY_MISMATCH";
    /**
     * Catalog has a price list already assigned.
     */
    const CATALOG_TAKEN = "CATALOG_TAKEN";
    /**
     * A country catalog cannot be assigned to a price list.
     */
    const COUNTRY_PRICE_LIST_ASSIGNMENT = "COUNTRY_PRICE_LIST_ASSIGNMENT";
    /**
     * Something went wrong when trying to save the price list. Please try again.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
}
