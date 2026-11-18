<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountBulkTagsAddArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["tags"];

    protected $search;
    protected $savedSearchId;
    protected $ids;
    protected $tags;

    /**
     * The search query for filtering discounts.
     * <br><br>
     * For more information on the list of supported fields and search syntax, refer to the [`discountNodes`](https://shopify.dev/docs/api/admin-graphql/latest/queries/discountNodes#query-arguments) query.
     */
    public function setSearch($search): static
    {
        $this->search = $search;

        return $this;
    }

    /**
     * The ID of the saved search for filtering discounts to tag.
     */
    public function setSavedSearchId($savedSearchId): static
    {
        $this->savedSearchId = $savedSearchId;

        return $this;
    }

    /**
     * The IDs of the discounts to tag.
     */
    public function setIds(array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }

    /**
     * The tags to add to the discounts.
     */
    public function setTags(array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }
}
