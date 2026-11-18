<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for which customers to add to or remove from the discount.
 */
class ShopifyDiscountCustomersInputInputObject extends InputObject
{
    protected $add;
    protected $remove;

    /**
     * A list of customers to add to the current list of customers who can use the discount.
     */
    public function setAdd(array $add): static
    {
        $this->add = $add;

        return $this;
    }

    /**
     * A list of customers to remove from the current list of customers who can use the discount.
     */
    public function setRemove(array $remove): static
    {
        $this->remove = $remove;

        return $this;
    }
}
