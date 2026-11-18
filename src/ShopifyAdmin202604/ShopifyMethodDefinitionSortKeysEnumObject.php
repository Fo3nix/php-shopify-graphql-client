<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the MethodDefinition query.
 */
class ShopifyMethodDefinitionSortKeysEnumObject extends EnumObject
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
     * Sort by the `rate_provider_type` value.
     */
    const RATE_PROVIDER_TYPE = "RATE_PROVIDER_TYPE";
}
