<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootMarketByGeographyArgumentsObject extends ArgumentsObject
{
    protected $countryCode;

    public function setCountryCode($countryCode)
    {
        $this->countryCode = new RawObject($countryCode);

        return $this;
    }
}
