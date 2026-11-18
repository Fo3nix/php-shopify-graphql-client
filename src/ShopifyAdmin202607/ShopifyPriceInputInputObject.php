<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating the price of a parent product variant.
 */
class ShopifyPriceInputInputObject extends InputObject
{
    protected $calculation;
    protected $price;

    /**
     * The specific type of calculation done to determine the price of the parent variant.
     * The price is calculated during Bundle creation. Updating a component variant won't recalculate the price.
     */
    public function setCalculation($shopifyPriceCalculationType): static
    {
        $this->calculation = new RawObject($shopifyPriceCalculationType);

        return $this;
    }

    /**
     * The price of the parent product variant. This will be used if calculation is set to 'FIXED'.
     */
    public function setPrice($price): static
    {
        $this->price = $price;

        return $this;
    }
}
