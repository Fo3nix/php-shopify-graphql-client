<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ProductVariantsBulkCreateUserError`.
 */
class ShopifyProductVariantsBulkCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Input is invalid.
     */
    const INVALID_INPUT = "INVALID_INPUT";
    /**
     * Product does not exist.
     */
    const PRODUCT_DOES_NOT_EXIST = "PRODUCT_DOES_NOT_EXIST";
    /**
     * On create, this key cannot be used.
     */
    const NO_KEY_ON_CREATE = "NO_KEY_ON_CREATE";
    /**
     * Variant already exists.
     */
    const VARIANT_ALREADY_EXISTS = "VARIANT_ALREADY_EXISTS";
    /**
     * Product is suspended.
     */
    const PRODUCT_SUSPENDED = "PRODUCT_SUSPENDED";
    /**
     * Variant price must be greater than or equal to zero.
     */
    const GREATER_THAN_OR_EQUAL_TO = "GREATER_THAN_OR_EQUAL_TO";
    /**
     * Price must be 0 for variants of products with a gift card issuance currency.
     */
    const LOCAL_CURRENCY_GIFT_CARD_PRICE_MUST_BE_ZERO = "LOCAL_CURRENCY_GIFT_CARD_PRICE_MUST_BE_ZERO";
    /**
     * Variant options are not enough.
     */
    const NEED_TO_ADD_OPTION_VALUES = "NEED_TO_ADD_OPTION_VALUES";
    /**
     * Variant options are more than the product options.
     */
    const OPTION_VALUES_FOR_NUMBER_OF_UNKNOWN_OPTIONS = "OPTION_VALUES_FOR_NUMBER_OF_UNKNOWN_OPTIONS";
    /**
     * Inventory locations cannot exceed the allowed resource limit or 10.
     */
    const TOO_MANY_INVENTORY_LOCATIONS = "TOO_MANY_INVENTORY_LOCATIONS";
    /**
     * You reached the limit of available SKUs in your current plan.
     */
    const SUBSCRIPTION_VIOLATION = "SUBSCRIPTION_VIOLATION";
    /**
     * Variant options already exist. Please change the variant option(s).
     */
    const VARIANT_ALREADY_EXISTS_CHANGE_OPTION_VALUE = "VARIANT_ALREADY_EXISTS_CHANGE_OPTION_VALUE";
    /**
     * Quantity could not be set. The location was not found.
     */
    const TRACKED_VARIANT_LOCATION_NOT_FOUND = "TRACKED_VARIANT_LOCATION_NOT_FOUND";
    /**
     * Input must be for this product.
     */
    const MUST_BE_FOR_THIS_PRODUCT = "MUST_BE_FOR_THIS_PRODUCT";
    /**
     * Input is not defined for this shop.
     */
    const NOT_DEFINED_FOR_SHOP = "NOT_DEFINED_FOR_SHOP";
    /**
     * Invalid input detected.
     */
    const INVALID = "INVALID";
    /**
     * Price cannot take a negative value.
     */
    const NEGATIVE_PRICE_VALUE = "NEGATIVE_PRICE_VALUE";
    /**
     * Operation is not supported for a combined listing parent product.
     */
    const UNSUPPORTED_COMBINED_LISTING_PARENT_OPERATION = "UNSUPPORTED_COMBINED_LISTING_PARENT_OPERATION";
    /**
     * Cannot set name for an option value linked to a metafield.
     */
    const CANNOT_SET_NAME_FOR_LINKED_OPTION_VALUE = "CANNOT_SET_NAME_FOR_LINKED_OPTION_VALUE";
    /**
     * Inventory quantity input exceeds the limit of 50000. Consider using separate `inventorySetQuantities` mutations.
     */
    const INVENTORY_QUANTITIES_LIMIT_EXCEEDED = "INVENTORY_QUANTITIES_LIMIT_EXCEEDED";
    /**
     * Cannot provide both 'barcode' and 'barcodes' for the same variant.
     */
    const INCOMPATIBLE_BARCODE_FIELDS = "INCOMPATIBLE_BARCODE_FIELDS";
    /**
     * Barcode value cannot be blank.
     */
    const BLANK_BARCODE_VALUE = "BLANK_BARCODE_VALUE";
    /**
     * Can only specify a maximum of 20 barcodes per variant.
     */
    const TOO_MANY_BARCODES = "TOO_MANY_BARCODES";
    /**
     * Barcode value is too long.
     */
    const BARCODE_VALUE_TOO_LONG = "BARCODE_VALUE_TOO_LONG";
    /**
     * Duplicate barcode value within the same variant.
     */
    const DUPLICATE_BARCODE_VALUE = "DUPLICATE_BARCODE_VALUE";
    /**
     * Barcode type is not supported. Allowed barcode types are: upc, ean, isbn, gtin, asin, ns-pid.
     */
    const INVALID_BARCODE_TYPE = "INVALID_BARCODE_TYPE";
    /**
     * Barcode value contains invalid spaces or hyphens for its type.
     */
    const INVALID_BARCODE_SEPARATORS = "INVALID_BARCODE_SEPARATORS";
    /**
     * Barcode value has an invalid length for its type.
     */
    const INVALID_BARCODE_LENGTH = "INVALID_BARCODE_LENGTH";
    /**
     * Barcode value has an invalid prefix for its type.
     */
    const INVALID_BARCODE_PREFIX = "INVALID_BARCODE_PREFIX";
    /**
     * Barcode value contains invalid characters for its type.
     */
    const INVALID_BARCODE_CHARACTERS = "INVALID_BARCODE_CHARACTERS";
    /**
     * Barcode checksum validation failed.
     */
    const BARCODE_CHECKSUM_VALIDATION_FAILED = "BARCODE_CHECKSUM_VALIDATION_FAILED";
}
