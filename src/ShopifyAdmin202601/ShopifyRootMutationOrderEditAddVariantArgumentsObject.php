<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderEditAddVariantArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "variantId", "quantity"];

    protected $id;
    protected $variantId;
    protected $locationId;
    protected $quantity;
    protected $allowDuplicates;

    /**
     * The ID of the [calculated order](https://shopify.dev/api/admin-graphql/latest/objects/calculatedorder)
     * or the order edit session to edit.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of the variant to add.
     */
    public function setVariantId($variantId): static
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * The ID of the [location](https://shopify.dev/api/admin-graphql/latest/objects/location)
     * to check for inventory availability. Used for tax calculations. A default location ID is chosen automatically if none is provided.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The quantity of the item to add to the order. Must be a positive value.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Whether the mutation can create a line item for a variant that's already on the calculated order.
     */
    public function setAllowDuplicates($allowDuplicates): static
    {
        $this->allowDuplicates = $allowDuplicates;

        return $this;
    }
}
