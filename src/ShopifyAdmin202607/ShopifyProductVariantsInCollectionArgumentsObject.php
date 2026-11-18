<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyProductVariantsInCollectionArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["collectionId"];

    protected $collectionId;
    protected $first;
    protected $after;
    protected $last;
    protected $before;

    /**
     * The ID of the collection to filter variants by.
     * For example, `collectionId: "gid://shopify/Collection/123"`.
     */
    public function setCollectionId($collectionId): static
    {
        $this->collectionId = $collectionId;

        return $this;
    }

    /**
     * The first `n` elements from the [paginated list](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function setFirst($first): static
    {
        $this->first = $first;

        return $this;
    }

    /**
     * The elements that come after the specified [cursor](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function setAfter($after): static
    {
        $this->after = $after;

        return $this;
    }

    /**
     * The last `n` elements from the [paginated list](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function setLast($last): static
    {
        $this->last = $last;

        return $this;
    }

    /**
     * The elements that come before the specified [cursor](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function setBefore($before): static
    {
        $this->before = $before;

        return $this;
    }
}
