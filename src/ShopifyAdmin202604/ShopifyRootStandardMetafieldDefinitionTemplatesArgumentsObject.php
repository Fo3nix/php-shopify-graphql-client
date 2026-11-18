<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootStandardMetafieldDefinitionTemplatesArgumentsObject extends ArgumentsObject
{
    protected $constraintSubtype;
    protected $constraintStatus;
    protected $excludeActivated;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    /**
     * Filter standard metafield definitions based on whether they apply to a given resource subtype.
     */
    public function setConstraintSubtype(ShopifyMetafieldDefinitionConstraintSubtypeIdentifierInputObject $shopifyMetafieldDefinitionConstraintSubtypeIdentifierInputObject): static
    {
        $this->constraintSubtype = $shopifyMetafieldDefinitionConstraintSubtypeIdentifierInputObject;

        return $this;
    }

    /**
     * Filter standard metafield definitions based on whether they are constrained.
     */
    public function setConstraintStatus($shopifyMetafieldDefinitionConstraintStatus): static
    {
        $this->constraintStatus = new RawObject($shopifyMetafieldDefinitionConstraintStatus);

        return $this;
    }

    /**
     * Filter standard metafield definitions that have already been activated.
     */
    public function setExcludeActivated($excludeActivated): static
    {
        $this->excludeActivated = $excludeActivated;

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
