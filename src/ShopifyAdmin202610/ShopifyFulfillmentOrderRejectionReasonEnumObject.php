<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The reason for a fulfillment order rejection.
 */
class ShopifyFulfillmentOrderRejectionReasonEnumObject extends EnumObject
{
    /**
     * The fulfillment order was rejected because of an incorrect address.
     */
    const INCORRECT_ADDRESS = "INCORRECT_ADDRESS";
    /**
     * The fulfillment order was rejected because inventory is out of stock.
     */
    const INVENTORY_OUT_OF_STOCK = "INVENTORY_OUT_OF_STOCK";
    /**
     * The fulfillment order was rejected because of an ineligible product.
     */
    const INELIGIBLE_PRODUCT = "INELIGIBLE_PRODUCT";
    /**
     * The fulfillment order was rejected because of an undeliverable destination.
     */
    const UNDELIVERABLE_DESTINATION = "UNDELIVERABLE_DESTINATION";
    /**
     * The fulfillment order was rejected because international address shipping hasn't been enabled.
     */
    const INTERNATIONAL_SHIPPING_UNAVAILABLE = "INTERNATIONAL_SHIPPING_UNAVAILABLE";
    /**
     * The fulfillment order was rejected because product information is incorrect to be able to ship.
     */
    const INCORRECT_PRODUCT_INFO = "INCORRECT_PRODUCT_INFO";
    /**
     * The fulfillment order was rejected because customs information was missing for international shipping.
     */
    const MISSING_CUSTOMS_INFO = "MISSING_CUSTOMS_INFO";
    /**
     * The fulfillment order was rejected because of an invalid SKU.
     */
    const INVALID_SKU = "INVALID_SKU";
    /**
     * The fulfillment order was rejected because the payment method was declined.
     */
    const PAYMENT_DECLINED = "PAYMENT_DECLINED";
    /**
     * The fulfillment order was rejected because the package preference was not set.
     */
    const PACKAGE_PREFERENCE_NOT_SET = "PACKAGE_PREFERENCE_NOT_SET";
    /**
     * The fulfillment order was rejected because of invalid customer contact information.
     */
    const INVALID_CONTACT_INFORMATION = "INVALID_CONTACT_INFORMATION";
    /**
     * The fulfillment order was rejected because the order is too large.
     */
    const ORDER_TOO_LARGE = "ORDER_TOO_LARGE";
    /**
     * The fulfillment order was rejected because the merchant is blocked or suspended.
     */
    const MERCHANT_BLOCKED_OR_SUSPENDED = "MERCHANT_BLOCKED_OR_SUSPENDED";
    /**
     * The fulfillment order was rejected for another reason.
     */
    const OTHER = "OTHER";
}
