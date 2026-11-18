<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a return line item.
 */
class ShopifySuggestedOutcomeReturnLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["id", "quantity"];

    protected $id;
    protected $quantity;

    /**
     * The ID of the return line item.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The quantity of the return line item.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
