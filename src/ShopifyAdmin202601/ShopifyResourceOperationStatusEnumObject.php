<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents the state of this catalog operation.
 */
class ShopifyResourceOperationStatusEnumObject extends EnumObject
{
    /**
     * Operation has been created.
     */
    const CREATED = "CREATED";
    /**
     * Operation is currently running.
     */
    const ACTIVE = "ACTIVE";
    /**
     * Operation is complete.
     */
    const COMPLETE = "COMPLETE";
}
