<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyPublishableResourcePublicationsV2ArgumentsObject extends ArgumentsObject
{
    protected $onlyPublished;
    protected $catalogType;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    /**
     * Whether to return only the resources that are currently published. If false, then also returns the resources that are scheduled or staged to be published.
     */
    public function setOnlyPublished($onlyPublished): static
    {
        $this->onlyPublished = $onlyPublished;

        return $this;
    }

    /**
     * Filter publications by catalog type. When not specified, defaults to APP. Has no effect on Collection, which only supports APP.
     */
    public function setCatalogType($shopifyCatalogType): static
    {
        $this->catalogType = new RawObject($shopifyCatalogType);

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

    /**
     * Reverse the order of the underlying list.
     */
    public function setReverse($reverse): static
    {
        $this->reverse = $reverse;

        return $this;
    }
}
