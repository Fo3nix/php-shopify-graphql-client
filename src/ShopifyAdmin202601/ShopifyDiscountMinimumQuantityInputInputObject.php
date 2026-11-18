<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the minimum quantity required for the discount.
 */
class ShopifyDiscountMinimumQuantityInputInputObject extends InputObject
{
    protected $greaterThanOrEqualToQuantity;

    /**
     * The minimum quantity of items that's required for the discount to be applied.
     */
    public function setGreaterThanOrEqualToQuantity($greaterThanOrEqualToQuantity): static
    {
        $this->greaterThanOrEqualToQuantity = $greaterThanOrEqualToQuantity;

        return $this;
    }
}
