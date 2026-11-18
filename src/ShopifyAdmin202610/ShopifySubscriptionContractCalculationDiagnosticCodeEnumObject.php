<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Diagnostic codes for subscription contract calculation errors and warnings. This list is open: new codes can be added in any API version as more conditions are surfaced, so clients must handle codes they don't recognize.
 */
class ShopifySubscriptionContractCalculationDiagnosticCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The merchandise product variant could not be found.
     */
    const MERCHANDISE_NOT_FOUND = "MERCHANDISE_NOT_FOUND";
    /**
     * The delivery address is not valid.
     */
    const DELIVERY_ADDRESS_INVALID = "DELIVERY_ADDRESS_INVALID";
    /**
     * The subscription contract currency is not supported by the shop.
     */
    const CURRENCY_NOT_SUPPORTED = "CURRENCY_NOT_SUPPORTED";
    /**
     * No location can ship the contract's merchandise to the delivery address. Delivery may still proceed at billing time by falling back to a default location.
     */
    const DELIVERY_NO_LOCATION_SHIPS_TO_ADDRESS = "DELIVERY_NO_LOCATION_SHIPS_TO_ADDRESS";
    /**
     * The contract's pickup location can no longer fulfil the order — it was removed, disabled, or does not support pickup for the merchandise.
     */
    const DELIVERY_PICKUP_LOCATION_UNAVAILABLE = "DELIVERY_PICKUP_LOCATION_UNAVAILABLE";
    /**
     * The payment method could not be found.
     */
    const PAYMENT_METHOD_NOT_FOUND = "PAYMENT_METHOD_NOT_FOUND";
    /**
     * A cart validation function produced a message.
     */
    const CUSTOM_VALIDATION = "CUSTOM_VALIDATION";
    /**
     * The contract has items that require shipping, so a delivery method is required.
     */
    const DELIVERY_METHOD_REQUIRED = "DELIVERY_METHOD_REQUIRED";
    /**
     * The contract has a delivery method but no items that require shipping.
     */
    const DELIVERY_METHOD_UNUSED = "DELIVERY_METHOD_UNUSED";
    /**
     * The customer has no contact method (email or phone) but the shop requires one to bill the contract.
     */
    const CUSTOMER_CONTACT_METHOD_REQUIRED = "CUSTOMER_CONTACT_METHOD_REQUIRED";
    /**
     * The contract contains a bundle that could not be expanded; bundles are only supported when merchandise customizations are enabled.
     */
    const BUNDLE_REQUIRES_MERCHANDISE_CUSTOMIZATIONS = "BUNDLE_REQUIRES_MERCHANDISE_CUSTOMIZATIONS";
    /**
     * A line's product variant belongs to a combined listing parent product, which can't be purchased directly. Use a variant of one of the combined listing's child products instead.
     */
    const COMBINED_LISTING_PARENT_NOT_PURCHASABLE = "COMBINED_LISTING_PARENT_NOT_PURCHASABLE";
    /**
     * A gift card merchandise line is invalid because its price is not greater than zero.
     */
    const MERCHANDISE_GIFT_CARD_INVALID = "MERCHANDISE_GIFT_CARD_INVALID";
    /**
     * A requested discount code was not applied: it doesn't exist, isn't active, or isn't applicable to this subscription contract.
     */
    const DISCOUNT_CODE_NOT_APPLIED = "DISCOUNT_CODE_NOT_APPLIED";
    /**
     * The calculation did not resolve in time. The calculation can be safely retried.
     */
    const CALCULATION_TIMEOUT = "CALCULATION_TIMEOUT";
    /**
     * A line's price was adjusted so it divides evenly across the fulfillments in each billing cycle.
     */
    const LINE_PRICE_ADJUSTED_FOR_FULFILLMENTS = "LINE_PRICE_ADJUSTED_FOR_FULFILLMENTS";
    /**
     * The calculation could not be completed due to an unexpected error.
     */
    const PROCESSING_ERROR = "PROCESSING_ERROR";
}
