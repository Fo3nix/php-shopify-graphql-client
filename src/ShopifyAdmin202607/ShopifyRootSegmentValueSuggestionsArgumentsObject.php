<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootSegmentValueSuggestionsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["search"];

    protected $search;
    protected $filterQueryName;
    protected $functionParameterQueryName;
    protected $first;
    protected $after;
    protected $last;
    protected $before;

    /**
     * Returns the elements of a list by keyword or term.
     */
    public function setSearch($search): static
    {
        $this->search = $search;

        return $this;
    }

    /**
     * Returns the elements of a list by filter handle.
     */
    public function setFilterQueryName($filterQueryName): static
    {
        $this->filterQueryName = $filterQueryName;

        return $this;
    }

    /**
     * Returns the elements of a list by filter parameter name.
     */
    public function setFunctionParameterQueryName($functionParameterQueryName): static
    {
        $this->functionParameterQueryName = $functionParameterQueryName;

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
