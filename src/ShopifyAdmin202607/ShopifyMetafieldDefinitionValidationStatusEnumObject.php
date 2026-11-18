<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible metafield definition validation statuses.
 */
class ShopifyMetafieldDefinitionValidationStatusEnumObject extends EnumObject
{
    /**
     * All of this definition's metafields are valid.
     */
    const ALL_VALID = "ALL_VALID";
    /**
     * Asynchronous validation of this definition's metafields is in progress.
     */
    const IN_PROGRESS = "IN_PROGRESS";
    /**
     * Some of this definition's metafields are invalid.
     */
    const SOME_INVALID = "SOME_INVALID";
}
