<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for linking a combined listing option to a metafield.
 */
class ShopifyLinkedMetafieldInputInputObject extends InputObject
{
    const REQUIRED = ["namespace", "key", "values"];

    protected $namespace;
    protected $key;
    protected $values;

    /**
     * The namespace of the linked metafield.
     */
    public function setNamespace($namespace): static
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * The key of the linked metafield.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * The values of the linked metafield.
     */
    public function setValues(array $values): static
    {
        $this->values = $values;

        return $this;
    }
}
