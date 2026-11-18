<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the FulfillmentOrder query.
 */
class ShopifyFulfillmentOrderSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `updated_at` value.
     */
    const UPDATED_AT = "UPDATED_AT";
}
