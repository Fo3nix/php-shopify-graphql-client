<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a product option value.
 */
class ShopifyOptionValueUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $name;
    protected $linkedMetafieldValue;

    /**
     * Specifies the product option value.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

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
