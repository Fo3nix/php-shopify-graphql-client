<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The role a collection plays in a duplication operation.
 */
class ShopifyCollectionDuplicateOperationRoleEnumObject extends EnumObject
{
    /**
     * Products are being duplicated from this collection.
     */
    const SOURCE = "SOURCE";
    /**
     * Products are being duplicated onto this collection.
     */
    const TARGET = "TARGET";
}
