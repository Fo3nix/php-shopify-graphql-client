<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible order action types for a
 * [sales agreement](https://shopify.dev/api/admin-graphql/latest/interfaces/salesagreement).
 */
class ShopifyOrderActionTypeEnumObject extends EnumObject
{
    /**
     * An order with a purchase or charge.
     */
    const ORDER = "ORDER";
    /**
     * An edit to the order.
     */
    const ORDER_EDIT = "ORDER_EDIT";
    /**
     * A refund on the order.
     */
    const REFUND = "REFUND";
    /**
     * A return on the order.
     */
    const RETURN = "RETURN";
    /**
     * An unknown agreement action. Represents new actions that may be added in future versions.
     */
    const UNKNOWN = "UNKNOWN";
}
