<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents the state of this product operation.
 */
class ShopifyProductOperationStatusEnumObject extends EnumObject
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
