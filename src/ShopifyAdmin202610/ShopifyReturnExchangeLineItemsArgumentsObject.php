<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyReturnExchangeLineItemsArgumentsObject extends ArgumentsObject
{
    protected $includeRemovedItems;
    protected $processingStatus;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    /**
     * Include exchange line items that have been removed from the order by an order edit, return, etc. Items that have been removed have a zero ([LineItem.currentQuantity](https://shopify.dev/docs/api/admin-graphql/unstable/objects/LineItem#field-lineitem-currentquantity)).
     */
    public function setIncludeRemovedItems($includeRemovedItems): static
    {
        $this->includeRemovedItems = $includeRemovedItems;

        return $this;
    }

    /**
     * Filter exchange line items by processing status.
     */
    public function setProcessingStatus($shopifyReturnProcessingStatusFilterInput): static
    {
        $this->processingStatus = new RawObject($shopifyReturnProcessingStatusFilterInput);

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
