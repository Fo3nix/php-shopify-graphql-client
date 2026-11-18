<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating or updating a product option value.
 */
class ShopifyOptionValueSetInputInputObject extends InputObject
{
    protected $id;
    protected $name;

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
}
