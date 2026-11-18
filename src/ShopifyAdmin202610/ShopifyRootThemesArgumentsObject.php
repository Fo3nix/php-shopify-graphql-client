<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootThemesArgumentsObject extends ArgumentsObject
{
    protected $roles;
    protected $names;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    /**
     * The theme roles to filter by.
     */
    public function setRoles(array $roles): static
    {
        $this->roles = array_map(function ($value) {
            return new RawObject($value);
        }, $roles);

        return $this;
    }

    /**
     * The theme names to filter by. Use '*' to match zero or more characters.
     */
    public function setNames(array $names): static
    {
        $this->names = $names;

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
