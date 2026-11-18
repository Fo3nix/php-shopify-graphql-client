<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyDraftOrderLocalizationExtensionsArgumentsObject extends ArgumentsObject
{
    protected $countryCodes;
    protected $purposes;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    /**
     * The country codes of the extensions.
     */
    public function setCountryCodes(array $countryCodes): static
    {
        $this->countryCodes = array_map(function ($value) {
            return new RawObject($value);
        }, $countryCodes);

        return $this;
    }

    /**
     * The purpose of the extensions.
     */
    public function setPurposes(array $purposes): static
    {
        $this->purposes = array_map(function ($value) {
            return new RawObject($value);
        }, $purposes);

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
