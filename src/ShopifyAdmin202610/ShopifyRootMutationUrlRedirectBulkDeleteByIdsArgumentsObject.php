<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationUrlRedirectBulkDeleteByIdsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["ids"];

    protected $ids;

    /**
     * A list of [`URLRedirect`](
     *             https://help.shopify.com/en/manual/online-store/menus-and-links/url-redirect
     *           ) object IDs to delete.
     */
    public function setIds(array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }
}
