<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `AppRevokeAccessScopesAppRevokeScopeError`.
 */
class ShopifyAppRevokeAccessScopesAppRevokeScopeErrorCodeEnumObject extends EnumObject
{
    /**
     * No app found on the access token.
     */
    const MISSING_SOURCE_APP = "MISSING_SOURCE_APP";
    /**
     * The application cannot be found.
     */
    const APPLICATION_CANNOT_BE_FOUND = "APPLICATION_CANNOT_BE_FOUND";
    /**
     * The requested list of scopes to revoke includes invalid handles.
     */
    const UNKNOWN_SCOPES = "UNKNOWN_SCOPES";
    /**
     * Required scopes cannot be revoked.
     */
    const CANNOT_REVOKE_REQUIRED_SCOPES = "CANNOT_REVOKE_REQUIRED_SCOPES";
    /**
     * Already granted implied scopes cannot be revoked.
     */
    const CANNOT_REVOKE_IMPLIED_SCOPES = "CANNOT_REVOKE_IMPLIED_SCOPES";
    /**
     * Cannot revoke optional scopes that haven't been declared.
     */
    const CANNOT_REVOKE_UNDECLARED_SCOPES = "CANNOT_REVOKE_UNDECLARED_SCOPES";
    /**
     * App is not installed on shop.
     */
    const APP_NOT_INSTALLED = "APP_NOT_INSTALLED";
}
