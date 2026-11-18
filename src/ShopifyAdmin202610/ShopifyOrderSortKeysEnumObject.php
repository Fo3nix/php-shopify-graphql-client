<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the Order query.
 */
class ShopifyOrderSortKeysEnumObject extends EnumObject
{
    /**
     * Sorts by the date and time the order was created.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sorts by the current total price of an order in the shop currency, including any returns/refunds/removals.
     */
    const CURRENT_TOTAL_PRICE = "CURRENT_TOTAL_PRICE";
    /**
     * Sorts by the customer's name.
     */
    const CUSTOMER_NAME = "CUSTOMER_NAME";
    /**
     * Sort by shipping address to analyze regional sales patterns or plan logistics.
     */
    const DESTINATION = "DESTINATION";
    /**
     * Sorts by the financial status of the order.
     */
    const FINANCIAL_STATUS = "FINANCIAL_STATUS";
    /**
     * Sorts by the order's fulfillment status.
     */
    const FULFILLMENT_STATUS = "FULFILLMENT_STATUS";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sorts by the order number.
     */
    const ORDER_NUMBER = "ORDER_NUMBER";
    /**
     * Sort by the purchase order number to match external procurement systems or track recent orders.
     */
    const PO_NUMBER = "PO_NUMBER";
    /**
     * Sorts by the date and time the order was processed.
     */
    const PROCESSED_AT = "PROCESSED_AT";
    /**
     * Sort by relevance to the search terms when the `query` parameter is specified on the connection.
     * Don't use this sort key when no search query is specified.
     */
    const RELEVANCE = "RELEVANCE";
    /**
     * Sort by the total quantity of all line items to identify large purchases or analyze inventory demand patterns.
     */
    const TOTAL_ITEMS_QUANTITY = "TOTAL_ITEMS_QUANTITY";
    /**
     * Sorts by the total sold price of an order in the shop currency, excluding any returns/refunds/removals.
     */
    const TOTAL_PRICE = "TOTAL_PRICE";
    /**
     * Sorts by the date and time the order was last updated.
     */
    const UPDATED_AT = "UPDATED_AT";
}
