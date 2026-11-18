<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to specify a region condition.
 */
class ShopifyMarketConditionsRegionInputInputObject extends InputObject
{
    const REQUIRED = ["countryCode"];

    protected $countryCode;
    protected $subdivision;

    /**
     * A country code to which this condition should apply.
     */
    public function setCountryCode($shopifyCountryCode): static
    {
        $this->countryCode = new RawObject($shopifyCountryCode);

        return $this;
    }

    /**
     * A subdivision such as a province or state.
     */
    public function setSubdivision($subdivision): static
    {
        $this->subdivision = $subdivision;

        return $this;
    }
}
