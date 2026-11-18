<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to specify a harmonized system code.
 */
class ShopifyCountryHarmonizedSystemCodeInputInputObject extends InputObject
{
    const REQUIRED = ["harmonizedSystemCode"];

    protected $harmonizedSystemCode;
    protected $countryCode;

    /**
     * Country specific harmonized system code.
     */
    public function setHarmonizedSystemCode($harmonizedSystemCode): static
    {
        $this->harmonizedSystemCode = $harmonizedSystemCode;

        return $this;
    }

    /**
     * The ISO 3166-1 alpha-2 country code for the country that issued the specified harmonized system code. Represents global harmonized system code when set to null.
     */
    public function setCountryCode($shopifyCountryCode): static
    {
        $this->countryCode = new RawObject($shopifyCountryCode);

        return $this;
    }
}
