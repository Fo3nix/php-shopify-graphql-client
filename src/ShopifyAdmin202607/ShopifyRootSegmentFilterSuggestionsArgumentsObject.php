<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootSegmentFilterSuggestionsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["search", "first"];

    protected $search;
    protected $first;
    protected $after;

    /**
     * Returns the elements of a list by keyword or term.
     */
    public function setSearch($search): static
    {
        $this->search = $search;

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
