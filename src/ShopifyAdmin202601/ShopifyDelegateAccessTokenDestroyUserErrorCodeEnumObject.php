<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `DelegateAccessTokenDestroyUserError`.
 */
class ShopifyDelegateAccessTokenDestroyUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Persistence failed.
     */
    const PERSISTENCE_FAILED = "PERSISTENCE_FAILED";
    /**
     * Access token not found.
     */
    const ACCESS_TOKEN_NOT_FOUND = "ACCESS_TOKEN_NOT_FOUND";
    /**
     * Cannot delete parent access token.
     */
    const CAN_ONLY_DELETE_DELEGATE_TOKENS = "CAN_ONLY_DELETE_DELEGATE_TOKENS";
    /**
     * Access denied.
     */
    const ACCESS_DENIED = "ACCESS_DENIED";
}
