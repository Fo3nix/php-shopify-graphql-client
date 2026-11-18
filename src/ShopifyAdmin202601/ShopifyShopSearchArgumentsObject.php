<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyShopSearchArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["query", "first"];

    protected $query;
    protected $types;
    protected $first;
    protected $after;

    /**
     * The search query to filter by.
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }

    /**
     * The search result types to filter by.
     */
    public function setTypes(array $types): static
    {
        $this->types = array_map(function ($value) {
            return new RawObject($value);
        }, $types);

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
}
