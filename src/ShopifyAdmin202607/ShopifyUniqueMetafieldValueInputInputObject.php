<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields that identify a unique valued metafield.
 */
class ShopifyUniqueMetafieldValueInputInputObject extends InputObject
{
    const REQUIRED = ["key", "value"];

    protected $namespace;
    protected $key;
    protected $value;

    /**
     * The container the metafield belongs to. If omitted, the app-reserved namespace will be used.
     */
    public function setNamespace($namespace): static
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * The key for the metafield.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * The value of the metafield.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }
}
