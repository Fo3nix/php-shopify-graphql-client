<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the AbandonedCheckout query.
 */
class ShopifyAbandonedCheckoutSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `checkout_id` value.
     */
    const CHECKOUT_ID = "CHECKOUT_ID";
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `customer_name` value.
     */
    const CUSTOMER_NAME = "CUSTOMER_NAME";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by relevance to the search terms when the `query` parameter is specified on the connection.
     * Don't use this sort key when no search query is specified.
     */
    const RELEVANCE = "RELEVANCE";
    /**
     * Sort by the `total_price` value.
     */
    const TOTAL_PRICE = "TOTAL_PRICE";
}
