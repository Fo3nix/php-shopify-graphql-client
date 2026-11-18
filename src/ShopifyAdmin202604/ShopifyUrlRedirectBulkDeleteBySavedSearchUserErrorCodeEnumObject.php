<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `UrlRedirectBulkDeleteBySavedSearchUserError`.
 */
class ShopifyUrlRedirectBulkDeleteBySavedSearchUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Saved search not found.
     */
    const SAVED_SEARCH_NOT_FOUND = "SAVED_SEARCH_NOT_FOUND";
    /**
     * The saved search's query cannot match all entries or be empty.
     */
    const INVALID_SAVED_SEARCH_QUERY = "INVALID_SAVED_SEARCH_QUERY";
}
