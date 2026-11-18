<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the SubscriptionContracts query.
 */
class ShopifySubscriptionContractsSortKeysEnumObject extends EnumObject
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
     * Sort by the `status` value.
     */
    const STATUS = "STATUS";
    /**
     * Sort by the `updated_at` value.
     */
    const UPDATED_AT = "UPDATED_AT";
}
