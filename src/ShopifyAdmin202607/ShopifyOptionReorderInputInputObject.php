<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for reordering a product option and/or its values.
 */
class ShopifyOptionReorderInputInputObject extends InputObject
{
    protected $id;
    protected $name;
    protected $values;

    /**
     * Specifies the product option to reorder by ID.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Specifies the product option to reorder by name.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Values associated with the option.
     */
    public function setValues(array $values): static
    {
        $this->values = $values;

        return $this;
    }
}
