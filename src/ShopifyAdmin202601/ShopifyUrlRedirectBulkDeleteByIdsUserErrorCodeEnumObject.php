<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `UrlRedirectBulkDeleteByIdsUserError`.
 */
class ShopifyUrlRedirectBulkDeleteByIdsUserErrorCodeEnumObject extends EnumObject
{
    /**
     * You must pass one or more [`URLRedirect`](
     *             https://help.shopify.com/en/manual/online-store/menus-and-links/url-redirect
     *           ) object IDs.
     */
    const IDS_EMPTY = "IDS_EMPTY";
}
