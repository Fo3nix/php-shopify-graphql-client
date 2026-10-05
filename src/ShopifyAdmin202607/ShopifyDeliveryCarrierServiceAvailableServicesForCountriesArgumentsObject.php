<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyDeliveryCarrierServiceAvailableServicesForCountriesArgumentsObject extends ArgumentsObject
{
    protected $origins;
    protected $countryCodes;
    protected $restOfWorld;

    public function setOrigins(array $origins)
    {
        $this->origins = $origins;

        return $this;
    }

    public function setCountryCodes(array $countryCodes)
    {
        $this->countryCodes = $countryCodes;

        return $this;
    }

    public function setRestOfWorld($restOfWorld)
    {
        $this->restOfWorld = $restOfWorld;

        return $this;
    }
}
