<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to create a product option value.
 */
class ShopifyOptionValueCreateInputInputObject extends InputObject
{
    protected $name;
    protected $linkedMetafieldValue;

    /**
     * Value associated with an option.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Metafield value associated with an option.
     */
    public function setLinkedMetafieldValue($linkedMetafieldValue): static
    {
        $this->linkedMetafieldValue = $linkedMetafieldValue;

        return $this;
    }
}
