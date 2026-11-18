<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a return line item.
 */
class ShopifyReturnProcessReturnLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["id", "quantity"];

    protected $id;
    protected $quantity;
    protected $dispositions;

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

    /**
     * The dispositions for the return line item.
     */
    public function setDispositions(array $dispositions): static
    {
        $this->dispositions = $dispositions;

        return $this;
    }
}
