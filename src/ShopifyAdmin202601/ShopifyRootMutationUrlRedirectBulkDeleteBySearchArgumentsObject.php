<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationUrlRedirectBulkDeleteBySearchArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["search"];

    protected $search;

    /**
     * Search query for filtering redirects on (both Redirect from and Redirect to fields).
     */
    public function setSearch($search): static
    {
        $this->search = $search;

        return $this;
    }
}
