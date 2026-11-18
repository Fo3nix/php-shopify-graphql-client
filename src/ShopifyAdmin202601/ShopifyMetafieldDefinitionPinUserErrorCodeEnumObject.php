<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `MetafieldDefinitionPinUserError`.
 */
class ShopifyMetafieldDefinitionPinUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The metafield definition was not found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The pinned limit has been reached for owner type.
     */
    const PINNED_LIMIT_REACHED = "PINNED_LIMIT_REACHED";
    /**
     * The metafield definition is already pinned.
     */
    const ALREADY_PINNED = "ALREADY_PINNED";
    /**
     * An internal error occurred.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * The metafield definition does not support pinning.
     */
    const UNSUPPORTED_PINNING = "UNSUPPORTED_PINNING";
    /**
     * Owner type can't be used in this mutation.
     */
    const DISALLOWED_OWNER_TYPE = "DISALLOWED_OWNER_TYPE";
}
