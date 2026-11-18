<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the QuantityPriceBreak query.
 */
class ShopifyQuantityPriceBreakSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `minimum_quantity` value.
     */
    const MINIMUM_QUANTITY = "MINIMUM_QUANTITY";
}
