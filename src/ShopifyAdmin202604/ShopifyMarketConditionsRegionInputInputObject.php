<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to specify a region condition.
 */
class ShopifyMarketConditionsRegionInputInputObject extends InputObject
{
    const REQUIRED = ["countryCode"];

    protected $countryCode;

    /**
     * A country code to which this condition should apply.
     */
    public function setCountryCode($shopifyCountryCode): static
    {
        $this->countryCode = new RawObject($shopifyCountryCode);

        return $this;
    }
}
