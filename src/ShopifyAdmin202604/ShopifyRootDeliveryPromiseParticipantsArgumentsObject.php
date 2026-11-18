<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootDeliveryPromiseParticipantsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["brandedPromiseHandle"];

    protected $ownerIds;
    protected $brandedPromiseHandle;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    /**
     * The product variant ID to filter by.
     */
    public function setOwnerIds(array $ownerIds): static
    {
        $this->ownerIds = $ownerIds;

        return $this;
    }

    /**
     * The branded promise handle to filter by.
     */
    public function setBrandedPromiseHandle($brandedPromiseHandle): static
    {
        $this->brandedPromiseHandle = $brandedPromiseHandle;

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
