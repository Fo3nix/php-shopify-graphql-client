<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for which customer segments to add to or remove from the discount.
 */
class ShopifyDiscountCustomerSegmentsInputInputObject extends InputObject
{
    protected $add;
    protected $remove;

    /**
     * A list of customer segments to add to the current list of customer segments.
     */
    public function setAdd(array $add): static
    {
        $this->add = $add;

        return $this;
    }

    /**
     * A list of customer segments to remove from the current list of customer segments.
     */
    public function setRemove(array $remove): static
    {
        $this->remove = $remove;

        return $this;
    }
}
