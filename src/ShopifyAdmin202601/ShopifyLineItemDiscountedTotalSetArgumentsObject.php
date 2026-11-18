<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyLineItemDiscountedTotalSetArgumentsObject extends ArgumentsObject
{
    protected $withCodeDiscounts;

    /**
     * Whether to include code-based discounts in the total.
     */
    public function setWithCodeDiscounts($withCodeDiscounts): static
    {
        $this->withCodeDiscounts = $withCodeDiscounts;

        return $this;
    }
}
