<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a line item property for an order.
 */
class ShopifyOrderCreateLineItemPropertyInputInputObject extends InputObject
{
    const REQUIRED = ["name", "value"];

    protected $name;
    protected $value;

    /**
     * The name of the line item property.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The value of the line item property.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }
}
