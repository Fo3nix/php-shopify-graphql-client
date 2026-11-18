<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to link a product option to a metafield.
 */
class ShopifyLinkedMetafieldCreateInputInputObject extends InputObject
{
    const REQUIRED = ["namespace", "key"];

    protected $namespace;
    protected $key;
    protected $values;

    /**
     * The namespace of the metafield this option is linked to.
     */
    public function setNamespace($namespace): static
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * The key of the metafield this option is linked to.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Values associated with the option.
     */
    public function setValues(array $values): static
    {
        $this->values = $values;

        return $this;
    }
}
