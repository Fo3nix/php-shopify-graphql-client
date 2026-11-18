<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyDeliveryCarrierServiceAvailableServicesForCountriesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["restOfWorld"];

    protected $origins;
    protected $countryCodes;
    protected $restOfWorld;

    /**
     * The locations of the possible origins.
     */
    public function setOrigins(array $origins): static
    {
        $this->origins = $origins;

        return $this;
    }

    /**
     * The country codes of the destinations.
     */
    public function setCountryCodes(array $countryCodes): static
    {
        $this->countryCodes = array_map(function ($value) {
            return new RawObject($value);
        }, $countryCodes);

        return $this;
    }

    /**
     * Whether to use 'Rest of World' as the destination.
     */
    public function setRestOfWorld($restOfWorld): static
    {
        $this->restOfWorld = $restOfWorld;

        return $this;
    }
}
