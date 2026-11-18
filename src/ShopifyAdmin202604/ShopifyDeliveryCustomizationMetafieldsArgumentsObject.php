<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyDeliveryCustomizationMetafieldsArgumentsObject extends ArgumentsObject
{
    protected $namespace;
    protected $keys;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    /**
     * The metafield namespace to filter by. If omitted, all metafields are returned.
     */
    public function setNamespace($namespace): static
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * A list of metafields to retrieve, in the format `namespace.key`. If the namespace is omitted, then the app-reserved namespace is used. Each returned metafield's `key` field uses the same format as its entry in this list: `custom.material` returns `custom.material`, and `material` returns `material`. App-reserved namespaces are returned in resolved form, such as `app--12345--foo.material` for `$app:foo.material`. Metafields are returned in the order of this list, and keys that don't match a metafield are left out. Can't be used with the `namespace` argument.
     */
    public function setKeys(array $keys): static
    {
        $this->keys = $keys;

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
