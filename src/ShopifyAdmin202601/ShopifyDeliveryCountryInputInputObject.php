<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to specify a country.
 */
class ShopifyDeliveryCountryInputInputObject extends InputObject
{
    protected $code;
    protected $restOfWorld;
    protected $provinces;
    protected $includeAllProvinces;

    /**
     * The country code of the country in the ISO 3166-1 alpha-2 format.
     */
    public function setCode($shopifyCountryCode): static
    {
        $this->code = new RawObject($shopifyCountryCode);

        return $this;
    }

    /**
     * Whether the country is a part of the 'Rest of World' shipping zone.
     */
    public function setRestOfWorld($restOfWorld): static
    {
        $this->restOfWorld = $restOfWorld;

        return $this;
    }

    /**
     * The regions associated with this country.
     */
    public function setProvinces(array $provinces): static
    {
        $this->provinces = $provinces;

        return $this;
    }

    /**
     * Associate all available provinces with this country.
     */
    public function setIncludeAllProvinces($includeAllProvinces): static
    {
        $this->includeAllProvinces = $includeAllProvinces;

        return $this;
    }
}
