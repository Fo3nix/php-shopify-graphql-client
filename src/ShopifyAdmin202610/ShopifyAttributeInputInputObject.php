<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for an attribute.
 */
class ShopifyAttributeInputInputObject extends InputObject
{
    const REQUIRED = ["key", "value"];

    protected $key;
    protected $value;

    /**
     * Key or name of the attribute.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Value of the attribute.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }
}
