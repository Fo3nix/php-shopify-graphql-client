<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMarketByGeographyArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["countryCode"];

    protected $countryCode;

    /**
     * The code for the country where the customer is.
     */
    public function setCountryCode($shopifyCountryCode): static
    {
        $this->countryCode = new RawObject($shopifyCountryCode);

        return $this;
    }
}
