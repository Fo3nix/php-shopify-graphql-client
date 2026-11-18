<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a LocalizedFieldInput.
 */
class ShopifyLocalizedFieldInputInputObject extends InputObject
{
    const REQUIRED = ["key", "value"];

    protected $key;
    protected $value;

    /**
     * The key for the localized field.
     */
    public function setKey($shopifyLocalizedFieldKey): static
    {
        $this->key = new RawObject($shopifyLocalizedFieldKey);

        return $this;
    }

    /**
     * The localized field value.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }
}
