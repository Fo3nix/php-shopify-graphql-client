<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible filter statuses associated with a metafield definition for use in admin filtering.
 */
class ShopifyMetafieldDefinitionAdminFilterStatusEnumObject extends EnumObject
{
    /**
     * The metafield definition cannot be used for admin filtering.
     */
    const NOT_FILTERABLE = "NOT_FILTERABLE";
    /**
     * The metafield definition's metafields are currently being processed for admin filtering.
     */
    const IN_PROGRESS = "IN_PROGRESS";
    /**
     * The metafield definition allows admin filtering by matching metafield values.
     */
    const FILTERABLE = "FILTERABLE";
    /**
     * The metafield definition has failed to be enabled for admin filtering.
     */
    const FAILED = "FAILED";
}
