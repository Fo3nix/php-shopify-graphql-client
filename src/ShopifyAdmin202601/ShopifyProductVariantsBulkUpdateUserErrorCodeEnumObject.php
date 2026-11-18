<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ProductVariantsBulkUpdateUserError`.
 */
class ShopifyProductVariantsBulkUpdateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Input is invalid.
     */
    const INVALID_INPUT = "INVALID_INPUT";
    /**
     * Mutually exclusive input fields provided.
     */
    const CANNOT_SPECIFY_BOTH = "CANNOT_SPECIFY_BOTH";
    /**
     * Mandatory field input field missing.
     */
    const MUST_SPECIFY_ONE_OF_PAIR = "MUST_SPECIFY_ONE_OF_PAIR";
    /**
     * Option value name is too long.
     */
    const OPTION_VALUE_NAME_TOO_LONG = "OPTION_VALUE_NAME_TOO_LONG";
    /**
     * Product does not exist.
     */
    const PRODUCT_DOES_NOT_EXIST = "PRODUCT_DOES_NOT_EXIST";
    /**
     * Product variant is missing ID attribute.
     */
    const PRODUCT_VARIANT_ID_MISSING = "PRODUCT_VARIANT_ID_MISSING";
    /**
     * Product variant does not exist.
     */
    const PRODUCT_VARIANT_DOES_NOT_EXIST = "PRODUCT_VARIANT_DOES_NOT_EXIST";
    /**
     * Option does not exist.
     */
    const OPTION_DOES_NOT_EXIST = "OPTION_DOES_NOT_EXIST";
    /**
     * Option value does not exist.
     */
    const OPTION_VALUE_DOES_NOT_EXIST = "OPTION_VALUE_DOES_NOT_EXIST";
    /**
     * Input must be for this product.
     */
    const MUST_BE_FOR_THIS_PRODUCT = "MUST_BE_FOR_THIS_PRODUCT";
    /**
     * Input is not defined for this shop.
     */
    const NOT_DEFINED_FOR_SHOP = "NOT_DEFINED_FOR_SHOP";
    /**
     * Product is suspended.
     */
    const PRODUCT_SUSPENDED = "PRODUCT_SUSPENDED";
    /**
     * Inventory quantities can only be provided during create. To update inventory for existing variants, use inventoryAdjustQuantities.
     */
    const NO_INVENTORY_QUANTITIES_ON_VARIANTS_UPDATE = "NO_INVENTORY_QUANTITIES_ON_VARIANTS_UPDATE";
    /**
     * The variant already exists.
     */
    const VARIANT_ALREADY_EXISTS = "VARIANT_ALREADY_EXISTS";
    /**
     * The price of the variant must be greater than or equal to zero.
     */
    const GREATER_THAN_OR_EQUAL_TO = "GREATER_THAN_OR_EQUAL_TO";
    /**
     * Variant options are not enough.
     */
    const NEED_TO_ADD_OPTION_VALUES = "NEED_TO_ADD_OPTION_VALUES";
    /**
     * Variant options are more than the product options.
     */
    const OPTION_VALUES_FOR_NUMBER_OF_UNKNOWN_OPTIONS = "OPTION_VALUES_FOR_NUMBER_OF_UNKNOWN_OPTIONS";
    /**
     * You reached the limit of available SKUs in your current plan.
     */
    const SUBSCRIPTION_VIOLATION = "SUBSCRIPTION_VIOLATION";
    /**
     * Inventory quantities cannot be provided during update.
     */
    const NO_INVENTORY_QUANTITES_DURING_UPDATE = "NO_INVENTORY_QUANTITES_DURING_UPDATE";
    /**
     * Price cannot take a negative value.
     */
    const NEGATIVE_PRICE_VALUE = "NEGATIVE_PRICE_VALUE";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The input value is too short.
     */
    const TOO_SHORT = "TOO_SHORT";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * Metafield value is invalid.
     */
    const INVALID_VALUE = "INVALID_VALUE";
    /**
     * Cannot set name for an option value linked to a metafield.
     */
    const CANNOT_SET_NAME_FOR_LINKED_OPTION_VALUE = "CANNOT_SET_NAME_FOR_LINKED_OPTION_VALUE";
    /**
     * Operation is not supported for a combined listing parent product.
     */
    const UNSUPPORTED_COMBINED_LISTING_PARENT_OPERATION = "UNSUPPORTED_COMBINED_LISTING_PARENT_OPERATION";
    /**
     * Inventory quantity input exceeds the limit of 50000. Consider using separate `inventorySetQuantities` mutations.
     */
    const INVENTORY_QUANTITIES_LIMIT_EXCEEDED = "INVENTORY_QUANTITIES_LIMIT_EXCEEDED";
}
