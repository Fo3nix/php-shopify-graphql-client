<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the ScheduledChange query.
 */
class ShopifyScheduledChangeSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `expected_at` value.
     */
    const EXPECTED_AT = "EXPECTED_AT";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
}
