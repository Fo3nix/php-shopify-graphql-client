<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDiscountAutomaticBulkDeleteArgumentsObject extends ArgumentsObject
{
    protected $search;
    protected $savedSearchId;
    protected $ids;

    /**
     * The search query for filtering automatic discounts to delete.
     *
     * For more information on the list of supported fields and search syntax, refer to the [AutomaticDiscountNodes query section](https://shopify.dev/api/admin-graphql/latest/queries/automaticDiscountNodes#argument-automaticdiscountnodes-query).
     */
    public function setSearch($search): static
    {
        $this->search = $search;

        return $this;
    }

    /**
     * The ID of the saved search to use for filtering automatic discounts to delete.
     */
    public function setSavedSearchId($savedSearchId): static
    {
        $this->savedSearchId = $savedSearchId;

        return $this;
    }

    /**
     * The IDs of the automatic discounts to delete.
     */
    public function setIds(array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }
}
