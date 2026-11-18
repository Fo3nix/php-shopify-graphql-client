<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `DelegateAccessTokenCreateUserError`.
 */
class ShopifyDelegateAccessTokenCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The access scope can't be empty.
     */
    const EMPTY_ACCESS_SCOPE = "EMPTY_ACCESS_SCOPE";
    /**
     * The parent access token can't be a delegate token.
     */
    const DELEGATE_ACCESS_TOKEN = "DELEGATE_ACCESS_TOKEN";
    /**
     * The expires_in value must be greater than 0.
     */
    const NEGATIVE_EXPIRES_IN = "NEGATIVE_EXPIRES_IN";
    /**
     * The delegate token can't expire after the parent token.
     */
    const EXPIRES_AFTER_PARENT = "EXPIRES_AFTER_PARENT";
    /**
     * The parent access token can't have a refresh token.
     */
    const REFRESH_TOKEN = "REFRESH_TOKEN";
    /**
     * Persistence failed.
     */
    const PERSISTENCE_FAILED = "PERSISTENCE_FAILED";
    /**
     * Unknown scopes.
     */
    const UNKNOWN_SCOPES = "UNKNOWN_SCOPES";
}
