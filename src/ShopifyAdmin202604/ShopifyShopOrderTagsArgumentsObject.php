<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyShopOrderTagsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["first"];

    protected $first;
    protected $sort;

    /**
     * The first `n` elements from the [paginated list](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function setFirst($first): static
    {
        $this->first = $first;

        return $this;
    }

    /**
     * Sort type.
     */
    public function setSort($shopifyShopTagSort): static
    {
        $this->sort = new RawObject($shopifyShopTagSort);

        return $this;
    }
}
