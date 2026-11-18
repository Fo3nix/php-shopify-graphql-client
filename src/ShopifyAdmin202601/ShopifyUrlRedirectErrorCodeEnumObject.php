<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `UrlRedirectUserError`.
 */
class ShopifyUrlRedirectErrorCodeEnumObject extends EnumObject
{
    /**
     * Redirect does not exist.
     */
    const DOES_NOT_EXIST = "DOES_NOT_EXIST";
    /**
     * Redirect could not be created.
     */
    const CREATE_FAILED = "CREATE_FAILED";
    /**
     * Redirect could not be updated.
     */
    const UPDATE_FAILED = "UPDATE_FAILED";
    /**
     * Redirect could not be deleted.
     */
    const DELETE_FAILED = "DELETE_FAILED";
}
