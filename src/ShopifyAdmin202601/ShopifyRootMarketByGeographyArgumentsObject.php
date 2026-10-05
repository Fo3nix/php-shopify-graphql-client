<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMarketByGeographyArgumentsObject extends ArgumentsObject
{
    protected $countryCode;

    public function setCountryCode($shopifyCountryCode)
    {
        $this->countryCode = new RawObject($shopifyCountryCode);

        return $this;
    }
}
