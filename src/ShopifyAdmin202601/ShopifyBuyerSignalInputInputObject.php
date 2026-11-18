<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a buyer signal.
 */
class ShopifyBuyerSignalInputInputObject extends InputObject
{
    const REQUIRED = ["countryCode"];

    protected $countryCode;

    /**
     * The country code of the buyer.
     */
    public function setCountryCode($shopifyCountryCode): static
    {
        $this->countryCode = new RawObject($shopifyCountryCode);

        return $this;
    }
}
