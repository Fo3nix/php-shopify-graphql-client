<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for reordering a product option value.
 */
class ShopifyOptionValueReorderInputInputObject extends InputObject
{
    protected $id;
    protected $name;

    /**
     * Specifies the product option value by ID.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Specifies the product option value by name.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }
}
