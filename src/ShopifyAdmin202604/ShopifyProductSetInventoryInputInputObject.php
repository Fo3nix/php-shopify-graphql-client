<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to set inventory quantities using `productSet` mutation.
 */
class ShopifyProductSetInventoryInputInputObject extends InputObject
{
    const REQUIRED = ["locationId", "name", "quantity"];

    protected $locationId;
    protected $name;
    protected $quantity;

    /**
     * The ID of the location of the inventory quantity being set.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The name of the inventory quantity being set. Must be one of `available` or `on_hand`.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The values to which each quantities will be set.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
