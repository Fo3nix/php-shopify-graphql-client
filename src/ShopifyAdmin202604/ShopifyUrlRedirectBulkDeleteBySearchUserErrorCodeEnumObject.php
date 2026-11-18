<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `UrlRedirectBulkDeleteBySearchUserError`.
 */
class ShopifyUrlRedirectBulkDeleteBySearchUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Invalid search string.
     */
    const INVALID_SEARCH_ARGUMENT = "INVALID_SEARCH_ARGUMENT";
}
