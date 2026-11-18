<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the bundle components for core.
 */
class ShopifyProductVariantGroupRelationshipInputInputObject extends InputObject
{
    const REQUIRED = ["id", "quantity"];

    protected $id;
    protected $quantity;

    /**
     * The ID of the product variant that's a component of the bundle.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The number of units of the product variant required to construct one unit of the bundle.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
