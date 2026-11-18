<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the minimum subtotal required for a discount.
 */
class ShopifyDiscountMinimumSubtotalInputInputObject extends InputObject
{
    protected $greaterThanOrEqualToSubtotal;

    /**
     * The minimum subtotal that's required for the discount to be applied.
     */
    public function setGreaterThanOrEqualToSubtotal($greaterThanOrEqualToSubtotal): static
    {
        $this->greaterThanOrEqualToSubtotal = $greaterThanOrEqualToSubtotal;

        return $this;
    }
}
