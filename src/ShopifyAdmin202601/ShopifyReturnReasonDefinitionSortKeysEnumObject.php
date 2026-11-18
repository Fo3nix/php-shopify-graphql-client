<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the ReturnReasonDefinition query.
 */
class ShopifyReturnReasonDefinitionSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `handle` value.
     */
    const HANDLE = "HANDLE";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `name` value.
     */
    const NAME = "NAME";
}
