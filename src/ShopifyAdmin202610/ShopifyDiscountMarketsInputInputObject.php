<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the markets where the discount is available.
 */
class ShopifyDiscountMarketsInputInputObject extends InputObject
{
    protected $add;
    protected $remove;

    /**
     * The list of market IDs to add.
     */
    public function setAdd(array $add): static
    {
        $this->add = $add;

        return $this;
    }

    /**
     * The list of market IDs to remove.
     */
    public function setRemove(array $remove): static
    {
        $this->remove = $remove;

        return $this;
    }
}
