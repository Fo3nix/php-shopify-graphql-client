<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to create a price inclusion.
 */
class ShopifyMarketPriceInclusionsInputInputObject extends InputObject
{
    protected $taxPricingStrategy;
    protected $dutiesPricingStrategy;

    /**
     * The inclusive tax pricing strategy for the market.
     */
    public function setTaxPricingStrategy($shopifyInclusiveTaxPricingStrategy): static
    {
        $this->taxPricingStrategy = new RawObject($shopifyInclusiveTaxPricingStrategy);

        return $this;
    }

    /**
     * The inclusive duties pricing strategy for the market.
     */
    public function setDutiesPricingStrategy($shopifyInclusiveDutiesPricingStrategy): static
    {
        $this->dutiesPricingStrategy = new RawObject($shopifyInclusiveDutiesPricingStrategy);

        return $this;
    }
}
