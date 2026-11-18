<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * When to reserve inventory for a selling plan.
 */
class ShopifySellingPlanReserveEnumObject extends EnumObject
{
    /**
     * Reserve inventory when order is fulfilled.
     */
    const ON_FULFILLMENT = "ON_FULFILLMENT";
    /**
     * Reserve inventory at time of sale.
     */
    const ON_SALE = "ON_SALE";
}
