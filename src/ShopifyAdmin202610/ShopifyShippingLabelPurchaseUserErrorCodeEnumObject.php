<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ShippingLabelPurchaseUserError`.
 */
class ShopifyShippingLabelPurchaseUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The record with the ID used as the input value couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * Non-zero total weight is required for purchase.
     */
    const TOTAL_WEIGHT_ZERO = "TOTAL_WEIGHT_ZERO";
    /**
     * Shipping date has already passed.
     */
    const SHIPPING_DATE_IN_THE_PAST = "SHIPPING_DATE_IN_THE_PAST";
    /**
     * Shipping rate selection is required for purchase.
     */
    const MISSING_SHIPPING_RATE = "MISSING_SHIPPING_RATE";
    /**
     * Shipping date is required for purchase.
     */
    const MISSING_SHIPPING_DATE = "MISSING_SHIPPING_DATE";
    /**
     * Missing insurance coverage amount.
     */
    const MISSING_INSURANCE_COVERAGE_AMOUNT = "MISSING_INSURANCE_COVERAGE_AMOUNT";
    /**
     * Missing insurance coverage currency.
     */
    const MISSING_INSURANCE_COVERAGE_CURRENCY = "MISSING_INSURANCE_COVERAGE_CURRENCY";
    /**
     * Package dimensions must be greater than zero.
     */
    const INVALID_PACKAGE_DIMENSIONS = "INVALID_PACKAGE_DIMENSIONS";
    /**
     * Missing harmonized system code.
     */
    const MISSING_HS_CODE = "MISSING_HS_CODE";
    /**
     * Missing country of origin.
     */
    const MISSING_COUNTRY_OF_ORIGIN = "MISSING_COUNTRY_OF_ORIGIN";
    /**
     * At least 1 item should be fulfilled.
     */
    const AT_LEAST_1_ITEM_REQUIRED = "AT_LEAST_1_ITEM_REQUIRED";
    /**
     * The shipping intent has a phone number that is not fully qualified for the origin address.
     */
    const PHONE_NUMBER_NOT_FULLY_QUALIFIED_ORIGIN = "PHONE_NUMBER_NOT_FULLY_QUALIFIED_ORIGIN";
    /**
     * The shipping intent has a phone number that is not fully qualified for the destination address.
     */
    const PHONE_NUMBER_NOT_FULLY_QUALIFIED_DESTINATION = "PHONE_NUMBER_NOT_FULLY_QUALIFIED_DESTINATION";
    /**
     * The intent is trying to set an adaptive shipping state on a non-adaptive shipping order.
     */
    const ADAPTIVE_SHIPPING_STATE_INVALID = "ADAPTIVE_SHIPPING_STATE_INVALID";
    /**
     * The fulfillment order is not eligible for label purchase. Review the fulfillment order details and try again.
     */
    const FULFILLMENT_ORDER_INVALID = "FULFILLMENT_ORDER_INVALID";
    /**
     * Shipping labels may not be purchased at this time. Please try again later.
     */
    const KILL_SWITCH = "KILL_SWITCH";
    /**
     * The label purchase failed. Please review the shipment details and try again.
     */
    const PURCHASE_FAILED = "PURCHASE_FAILED";
    /**
     * Rates for the shipping label were not found. Please review the shipment details and try again.
     */
    const RATES_NOT_FOUND = "RATES_NOT_FOUND";
    /**
     * Shopify Shipping terms of service have not been accepted. Purchase a shipping label through the Shopify admin first.
     */
    const TERMS_OF_SERVICE_NOT_ACCEPTED = "TERMS_OF_SERVICE_NOT_ACCEPTED";
    /**
     * The selected shipping carrier cannot be purchased through this API.
     */
    const CARRIER_NOT_SUPPORTED = "CARRIER_NOT_SUPPORTED";
    /**
     * The API client lacks write access to the provided fulfillment order.
     */
    const ACCESS_DENIED = "ACCESS_DENIED";
    /**
     * The requested carrier package does not match the preferred rate selection carrier.
     */
    const PACKAGE_CARRIER_MISMATCH = "PACKAGE_CARRIER_MISMATCH";
    /**
     * Pickup point orders cannot be purchased through this API. Purchase the shipping label through the Shopify admin.
     */
    const PICKUP_POINT_NOT_SUPPORTED = "PICKUP_POINT_NOT_SUPPORTED";
}
