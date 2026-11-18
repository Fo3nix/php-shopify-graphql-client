<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the Rollout query.
 */
class ShopifyRolloutSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `name` value.
     */
    const NAME = "NAME";
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `updated_at` value.
     */
    const UPDATED_AT = "UPDATED_AT";
}
