<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for line items that the discount refers to.
 */
class ShopifySubscriptionManualDiscountLinesInputInputObject extends InputObject
{
    protected $add;
    protected $remove;

    /**
     * The ID of the lines to add to the subscription discount.
     */
    public function setAdd(array $add): static
    {
        $this->add = $add;

        return $this;
    }

    /**
     * The ID of the lines to remove from the subscription discount.
     */
    public function setRemove(array $remove): static
    {
        $this->remove = $remove;

        return $this;
    }
}
