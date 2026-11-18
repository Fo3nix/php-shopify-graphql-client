<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyTaxonomyCategoriesArgumentsObject extends ArgumentsObject
{
    protected $search;
    protected $childrenOf;
    protected $siblingsOf;
    protected $descendantsOf;
    protected $first;
    protected $after;
    protected $last;
    protected $before;

    /**
     * Searches the product taxonomy for matching categories.
     */
    public function setSearch($search): static
    {
        $this->search = $search;

        return $this;
    }

    /**
     * The ID of the category associated with the child categories to return.
     */
    public function setChildrenOf($childrenOf): static
    {
        $this->childrenOf = $childrenOf;

        return $this;
    }

    /**
     * The ID of the category associated with the sibling categories to return.
     */
    public function setSiblingsOf($siblingsOf): static
    {
        $this->siblingsOf = $siblingsOf;

        return $this;
    }

    /**
     * The ID of the category associated with the descendant categories to return.
     */
    public function setDescendantsOf($descendantsOf): static
    {
        $this->descendantsOf = $descendantsOf;

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
