<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the FulfillmentEvent query.
 */
class ShopifyFulfillmentEventSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `happened_at` value.
     */
    const HAPPENED_AT = "HAPPENED_AT";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
}
