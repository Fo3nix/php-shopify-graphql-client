<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDraftOrderBulkDeleteArgumentsObject extends ArgumentsObject
{
    protected $search;
    protected $savedSearchId;
    protected $ids;

    /**
     * The conditions for filtering draft orders on.
     * See the detailed [search syntax](https://shopify.dev/api/usage/search-syntax).
     */
    public function setSearch($search): static
    {
        $this->search = $search;

        return $this;
    }

    /**
     * The ID of the draft order saved search for filtering draft orders on.
     */
    public function setSavedSearchId($savedSearchId): static
    {
        $this->savedSearchId = $savedSearchId;

        return $this;
    }

    /**
     * The IDs of the draft orders to delete.
     */
    public function setIds(array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }
}
