<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a metaobject field value.
 */
class ShopifyMetaobjectFieldInputInputObject extends InputObject
{
    const REQUIRED = ["key", "value"];

    protected $key;
    protected $value;

    /**
     * The key of the field.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * The value of the field.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }
}
