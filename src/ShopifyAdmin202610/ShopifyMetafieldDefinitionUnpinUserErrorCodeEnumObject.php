<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `MetafieldDefinitionUnpinUserError`.
 */
class ShopifyMetafieldDefinitionUnpinUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The metafield definition was not found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The metafield definition isn't pinned.
     */
    const NOT_PINNED = "NOT_PINNED";
    /**
     * An internal error occurred.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * Definition is managed by app configuration and cannot be modified through the API.
     */
    const APP_CONFIG_MANAGED = "APP_CONFIG_MANAGED";
    /**
     * Owner type can't be used in this mutation.
     */
    const DISALLOWED_OWNER_TYPE = "DISALLOWED_OWNER_TYPE";
}
