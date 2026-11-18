<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `QuantityPricingByVariantUserError`.
 */
class ShopifyQuantityPricingByVariantUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * Price List does not exist.
     */
    const PRICE_LIST_NOT_FOUND = "PRICE_LIST_NOT_FOUND";
    /**
     * Something went wrong when trying to update quantity pricing. Please try again later.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
    /**
     * Invalid quantity price break.
     */
    const QUANTITY_PRICE_BREAK_ADD_INVALID = "QUANTITY_PRICE_BREAK_ADD_INVALID";
    /**
     * Quantity price break's fixed price not found.
     */
    const QUANTITY_PRICE_BREAK_ADD_PRICE_LIST_PRICE_NOT_FOUND = "QUANTITY_PRICE_BREAK_ADD_PRICE_LIST_PRICE_NOT_FOUND";
    /**
     * Exceeded the allowed number of quantity price breaks per variant.
     */
    const QUANTITY_PRICE_BREAK_ADD_LIMIT_EXCEEDED = "QUANTITY_PRICE_BREAK_ADD_LIMIT_EXCEEDED";
    /**
     * Price list and quantity price break currency mismatch.
     */
    const QUANTITY_PRICE_BREAK_ADD_CURRENCY_MISMATCH = "QUANTITY_PRICE_BREAK_ADD_CURRENCY_MISMATCH";
    /**
     * Failed to save quantity price break.
     */
    const QUANTITY_PRICE_BREAK_ADD_FAILED_TO_SAVE = "QUANTITY_PRICE_BREAK_ADD_FAILED_TO_SAVE";
    /**
     * Quantity price break minimum is less than the quantity rule minimum.
     */
    const QUANTITY_PRICE_BREAK_ADD_MIN_LOWER_THAN_QUANTITY_RULES_MIN = "QUANTITY_PRICE_BREAK_ADD_MIN_LOWER_THAN_QUANTITY_RULES_MIN";
    /**
     * Quantity price break minimum is higher than the quantity rule maximum.
     */
    const QUANTITY_PRICE_BREAK_ADD_MIN_HIGHER_THAN_QUANTITY_RULES_MAX = "QUANTITY_PRICE_BREAK_ADD_MIN_HIGHER_THAN_QUANTITY_RULES_MAX";
    /**
     * Quantity price break minimum is not multiple of the quantity rule increment.
     */
    const QUANTITY_PRICE_BREAK_ADD_MIN_NOT_A_MULTIPLE_OF_QUANTITY_RULES_INCREMENT = "QUANTITY_PRICE_BREAK_ADD_MIN_NOT_A_MULTIPLE_OF_QUANTITY_RULES_INCREMENT";
    /**
     * Quantity price break variant not found.
     */
    const QUANTITY_PRICE_BREAK_ADD_VARIANT_NOT_FOUND = "QUANTITY_PRICE_BREAK_ADD_VARIANT_NOT_FOUND";
    /**
     * Quantity price breaks to add inputs must be unique by variant id and minimum quantity.
     */
    const QUANTITY_PRICE_BREAK_ADD_DUPLICATE_INPUT_FOR_VARIANT_AND_MIN = "QUANTITY_PRICE_BREAK_ADD_DUPLICATE_INPUT_FOR_VARIANT_AND_MIN";
    /**
     * Quantity price break not found.
     */
    const QUANTITY_PRICE_BREAK_DELETE_NOT_FOUND = "QUANTITY_PRICE_BREAK_DELETE_NOT_FOUND";
    /**
     * Failed to delete quantity price break.
     */
    const QUANTITY_PRICE_BREAK_DELETE_FAILED = "QUANTITY_PRICE_BREAK_DELETE_FAILED";
    /**
     * Quantity rule variant not found.
     */
    const QUANTITY_RULE_ADD_VARIANT_NOT_FOUND = "QUANTITY_RULE_ADD_VARIANT_NOT_FOUND";
    /**
     * Quantity rule minimum is higher than the quantity price break minimum.
     */
    const QUANTITY_RULE_ADD_MIN_HIGHER_THAN_QUANTITY_PRICE_BREAK_MIN = "QUANTITY_RULE_ADD_MIN_HIGHER_THAN_QUANTITY_PRICE_BREAK_MIN";
    /**
     * Quantity rule maximum is less than the quantity price break minimum.
     */
    const QUANTITY_RULE_ADD_MAX_LOWER_THAN_QUANTITY_PRICE_BREAK_MIN = "QUANTITY_RULE_ADD_MAX_LOWER_THAN_QUANTITY_PRICE_BREAK_MIN";
    /**
     * Quantity rule increment must be a multiple of the quantity price break minimum.
     */
    const QUANTITY_RULE_ADD_INCREMENT_NOT_A_MULTIPLE_OF_QUANTITY_PRICE_BREAK_MIN = "QUANTITY_RULE_ADD_INCREMENT_NOT_A_MULTIPLE_OF_QUANTITY_PRICE_BREAK_MIN";
    /**
     * Quantity rule catalog context not supported.
     */
    const QUANTITY_RULE_ADD_CATALOG_CONTEXT_NOT_SUPPORTED = "QUANTITY_RULE_ADD_CATALOG_CONTEXT_NOT_SUPPORTED";
    /**
     * Quantity rule increment is greater than minimum.
     */
    const QUANTITY_RULE_ADD_INCREMENT_IS_GREATER_THAN_MINIMUM = "QUANTITY_RULE_ADD_INCREMENT_IS_GREATER_THAN_MINIMUM";
    /**
     * Quantity rule minimum is not a multiple of increment.
     */
    const QUANTITY_RULE_ADD_MINIMUM_NOT_A_MULTIPLE_OF_INCREMENT = "QUANTITY_RULE_ADD_MINIMUM_NOT_A_MULTIPLE_OF_INCREMENT";
    /**
     * Quantity rule maximum is not a multiple of increment.
     */
    const QUANTITY_RULE_ADD_MAXIMUM_NOT_A_MULTIPLE_OF_INCREMENT = "QUANTITY_RULE_ADD_MAXIMUM_NOT_A_MULTIPLE_OF_INCREMENT";
    /**
     * Quantity rule minimum is greater than maximum.
     */
    const QUANTITY_RULE_ADD_MINIMUM_GREATER_THAN_MAXIMUM = "QUANTITY_RULE_ADD_MINIMUM_GREATER_THAN_MAXIMUM";
    /**
     * Quantity rule increment is less than one.
     */
    const QUANTITY_RULE_ADD_INCREMENT_IS_LESS_THAN_ONE = "QUANTITY_RULE_ADD_INCREMENT_IS_LESS_THAN_ONE";
    /**
     * Quantity rule minimum is less than one.
     */
    const QUANTITY_RULE_ADD_MINIMUM_IS_LESS_THAN_ONE = "QUANTITY_RULE_ADD_MINIMUM_IS_LESS_THAN_ONE";
    /**
     * Quantity rule maximum is less than one.
     */
    const QUANTITY_RULE_ADD_MAXIMUM_IS_LESS_THAN_ONE = "QUANTITY_RULE_ADD_MAXIMUM_IS_LESS_THAN_ONE";
    /**
     * Quantity rules to add inputs must be unique by variant id.
     */
    const QUANTITY_RULE_ADD_DUPLICATE_INPUT_FOR_VARIANT = "QUANTITY_RULE_ADD_DUPLICATE_INPUT_FOR_VARIANT";
    /**
     * Quantity rule not found.
     */
    const QUANTITY_RULE_DELETE_RULE_NOT_FOUND = "QUANTITY_RULE_DELETE_RULE_NOT_FOUND";
    /**
     * Quantity rule variant not found.
     */
    const QUANTITY_RULE_DELETE_VARIANT_NOT_FOUND = "QUANTITY_RULE_DELETE_VARIANT_NOT_FOUND";
    /**
     * Price list and fixed price currency mismatch.
     */
    const PRICE_ADD_CURRENCY_MISMATCH = "PRICE_ADD_CURRENCY_MISMATCH";
    /**
     * Fixed price's variant not found.
     */
    const PRICE_ADD_VARIANT_NOT_FOUND = "PRICE_ADD_VARIANT_NOT_FOUND";
    /**
     * Prices to add inputs must be unique by variant id.
     */
    const PRICE_ADD_DUPLICATE_INPUT_FOR_VARIANT = "PRICE_ADD_DUPLICATE_INPUT_FOR_VARIANT";
    /**
     * The issuance currency of a local currency gift card must match the price list currency.
     */
    const PRICE_ADD_LOCAL_CURRENCY_GIFT_CARD_ISSUANCE_CURRENCY_MISMATCH = "PRICE_ADD_LOCAL_CURRENCY_GIFT_CARD_ISSUANCE_CURRENCY_MISMATCH";
    /**
     * The price of a local currency gift card cannot exceed the maximum gift card purchase limit.
     */
    const PRICE_ADD_LOCAL_CURRENCY_GIFT_CARD_LIMIT_EXCEEDED = "PRICE_ADD_LOCAL_CURRENCY_GIFT_CARD_LIMIT_EXCEEDED";
    /**
     * Price is not fixed.
     */
    const PRICE_DELETE_PRICE_NOT_FIXED = "PRICE_DELETE_PRICE_NOT_FIXED";
    /**
     * Fixed price's variant not found.
     */
    const PRICE_DELETE_VARIANT_NOT_FOUND = "PRICE_DELETE_VARIANT_NOT_FOUND";
    /**
     * Variant to delete by is not found.
     */
    const QUANTITY_PRICE_BREAK_DELETE_BY_VARIANT_ID_VARIANT_NOT_FOUND = "QUANTITY_PRICE_BREAK_DELETE_BY_VARIANT_ID_VARIANT_NOT_FOUND";
}
