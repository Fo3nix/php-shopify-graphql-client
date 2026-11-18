<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the destinations where the free shipping discount will be applied.
 */
class ShopifyDiscountShippingDestinationSelectionInputInputObject extends InputObject
{
    protected $all;
    protected $countries;

    /**
     * Whether the discount code applies to all countries.
     */
    public function setAll($all): static
    {
        $this->all = $all;

        return $this;
    }

    /**
     * A list of countries where the discount code will apply.
     */
    public function setCountries(ShopifyDiscountCountriesInputInputObject $shopifyDiscountCountriesInputInputObject): static
    {
        $this->countries = $shopifyDiscountCountriesInputInputObject;

        return $this;
    }
}
