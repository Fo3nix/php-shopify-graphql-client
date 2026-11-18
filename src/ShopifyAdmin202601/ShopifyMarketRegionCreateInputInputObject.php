<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for creating a market region with exactly one required option.
 */
class ShopifyMarketRegionCreateInputInputObject extends InputObject
{
    const REQUIRED = ["countryCode"];

    protected $countryCode;

    /**
     * A country code for the region.
     */
    public function setCountryCode($shopifyCountryCode): static
    {
        $this->countryCode = new RawObject($shopifyCountryCode);

        return $this;
    }
}
