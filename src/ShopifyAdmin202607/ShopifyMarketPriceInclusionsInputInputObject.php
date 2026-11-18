<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to create a price inclusion.
 */
class ShopifyMarketPriceInclusionsInputInputObject extends InputObject
{
    protected $taxPricingStrategy;
    protected $dutiesPricingStrategy;
    protected $adaptivePricingEnabled;

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

    /**
     * Whether adaptive pricing is enabled for the market. Only applicable for Markets with Managed Market enabled. When enabled, forces a state of `INCLUDES_TAXES_IN_PRICE_BASED_ON_COUNTRY`, `INCLUDE_DUTIES_IN_PRICE`, and `DDP`. When disabled, defaults to `INCLUDES_TAXES_IN_PRICE_BASED_ON_COUNTRY`, `ADD_DUTIES_AT_CHECKOUT`, and `DDP` unless otherwise specified.
     */
    public function setAdaptivePricingEnabled($adaptivePricingEnabled): static
    {
        $this->adaptivePricingEnabled = $adaptivePricingEnabled;

        return $this;
    }
}
