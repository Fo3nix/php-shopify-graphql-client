<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The reason for a fulfillment hold.
 */
class ShopifyFulfillmentHoldReasonEnumObject extends EnumObject
{
    /**
     * The fulfillment hold is applied because payment is pending.
     */
    const AWAITING_PAYMENT = "AWAITING_PAYMENT";
    /**
     * The fulfillment hold is applied because of a high risk of fraud.
     */
    const HIGH_RISK_OF_FRAUD = "HIGH_RISK_OF_FRAUD";
    /**
     * The fulfillment hold is applied because of an incorrect address.
     */
    const INCORRECT_ADDRESS = "INCORRECT_ADDRESS";
    /**
     * The fulfillment hold is applied because inventory is out of stock.
     */
    const INVENTORY_OUT_OF_STOCK = "INVENTORY_OUT_OF_STOCK";
    /**
     * The fulfillment hold is applied because of an unknown delivery date.
     */
    const UNKNOWN_DELIVERY_DATE = "UNKNOWN_DELIVERY_DATE";
    /**
     * The fulfillment hold is applied because of a post purchase upsell offer.
     */
    const ONLINE_STORE_POST_PURCHASE_CROSS_SELL = "ONLINE_STORE_POST_PURCHASE_CROSS_SELL";
    /**
     * The fulfillment hold is applied because of return items not yet received during an exchange.
     */
    const AWAITING_RETURN_ITEMS = "AWAITING_RETURN_ITEMS";
    /**
     * The fulfillment hold is applied for another reason.
     */
    const OTHER = "OTHER";
}
