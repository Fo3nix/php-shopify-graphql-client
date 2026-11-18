<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `QuantityRuleUserError`.
 */
class ShopifyQuantityRuleUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * Product variant ID does not exist.
     */
    const PRODUCT_VARIANT_DOES_NOT_EXIST = "PRODUCT_VARIANT_DOES_NOT_EXIST";
    /**
     * Price list does not exist.
     */
    const PRICE_LIST_DOES_NOT_EXIST = "PRICE_LIST_DOES_NOT_EXIST";
    /**
     * Quantity rule for variant associated with the price list provided does not exist.
     */
    const VARIANT_QUANTITY_RULE_DOES_NOT_EXIST = "VARIANT_QUANTITY_RULE_DOES_NOT_EXIST";
    /**
     * Minimum must be lower than or equal to the maximum.
     */
    const MINIMUM_IS_GREATER_THAN_MAXIMUM = "MINIMUM_IS_GREATER_THAN_MAXIMUM";
    /**
     * Minimum must be less than or equal to all quantity price break minimums associated with this variant in the specified price list.
     */
    const MINIMUM_IS_HIGHER_THAN_QUANTITY_PRICE_BREAK_MINIMUM = "MINIMUM_IS_HIGHER_THAN_QUANTITY_PRICE_BREAK_MINIMUM";
    /**
     * Maximum must be greater than or equal to all quantity price break minimums associated with this variant in the specified price list.
     */
    const MAXIMUM_IS_LOWER_THAN_QUANTITY_PRICE_BREAK_MINIMUM = "MAXIMUM_IS_LOWER_THAN_QUANTITY_PRICE_BREAK_MINIMUM";
    /**
     * Increment must be a multiple of all quantity price break minimums associated with this variant in the specified price list.
     */
    const INCREMENT_NOT_A_MULTIPLE_OF_QUANTITY_PRICE_BREAK_MINIMUM = "INCREMENT_NOT_A_MULTIPLE_OF_QUANTITY_PRICE_BREAK_MINIMUM";
    /**
     * Increment must be lower than or equal to the minimum.
     */
    const INCREMENT_IS_GREATER_THAN_MINIMUM = "INCREMENT_IS_GREATER_THAN_MINIMUM";
    /**
     * Value must be greater than or equal to 1.
     */
    const GREATER_THAN_OR_EQUAL_TO = "GREATER_THAN_OR_EQUAL_TO";
    /**
     * The maximum must be a multiple of the increment.
     */
    const MAXIMUM_NOT_MULTIPLE_OF_INCREMENT = "MAXIMUM_NOT_MULTIPLE_OF_INCREMENT";
    /**
     * The minimum must be a multiple of the increment.
     */
    const MINIMUM_NOT_MULTIPLE_OF_INCREMENT = "MINIMUM_NOT_MULTIPLE_OF_INCREMENT";
    /**
     * Quantity rules can be associated only with company location catalogs or catalogs associated with compatible markets.
     */
    const CATALOG_CONTEXT_DOES_NOT_SUPPORT_QUANTITY_RULES = "CATALOG_CONTEXT_DOES_NOT_SUPPORT_QUANTITY_RULES";
    /**
     * Quantity rule inputs must be unique by variant id.
     */
    const DUPLICATE_INPUT_FOR_VARIANT = "DUPLICATE_INPUT_FOR_VARIANT";
    /**
     * Something went wrong when trying to save the quantity rule. Please try again later.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
}
