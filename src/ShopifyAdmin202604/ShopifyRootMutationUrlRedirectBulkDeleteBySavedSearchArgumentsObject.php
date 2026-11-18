<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationUrlRedirectBulkDeleteBySavedSearchArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["savedSearchId"];

    protected $savedSearchId;

    /**
     * The ID of the URL redirect saved search for filtering.
     */
    public function setSavedSearchId($savedSearchId): static
    {
        $this->savedSearchId = $savedSearchId;

        return $this;
    }
}
