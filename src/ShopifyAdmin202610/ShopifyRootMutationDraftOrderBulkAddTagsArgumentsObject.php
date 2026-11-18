<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDraftOrderBulkAddTagsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["tags"];

    protected $search;
    protected $savedSearchId;
    protected $ids;
    protected $tags;

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
     * The IDs of the draft orders to add tags to.
     */
    public function setIds(array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }

    /**
     * List of tags to be added.
     */
    public function setTags(array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }
}
