<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `UrlRedirectImportUserError`.
 */
class ShopifyUrlRedirectImportErrorCodeEnumObject extends EnumObject
{
    /**
     * URL redirect import not found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The import has already completed.
     */
    const ALREADY_IMPORTED = "ALREADY_IMPORTED";
    /**
     * The import is already in progress.
     */
    const IN_PROGRESS = "IN_PROGRESS";
}
