<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a note attribute for an order.
 */
class ShopifyOrderCreateCustomAttributeInputInputObject extends InputObject
{
    const REQUIRED = ["key", "value"];

    protected $key;
    protected $value;

    /**
     * The key or name of the custom attribute.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * The value of the custom attribute.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }
}
