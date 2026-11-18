<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the selected variant option of the combined listing.
 */
class ShopifySelectedVariantOptionInputInputObject extends InputObject
{
    const REQUIRED = ["name", "value"];

    protected $name;
    protected $value;
    protected $linkedMetafieldValue;

    /**
     * The name of the parent product's option.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The selected option value of the parent product's option.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }

    /**
     * The metaobject value of the linked metafield.
     */
    public function setLinkedMetafieldValue($linkedMetafieldValue): static
    {
        $this->linkedMetafieldValue = $linkedMetafieldValue;

        return $this;
    }
}
