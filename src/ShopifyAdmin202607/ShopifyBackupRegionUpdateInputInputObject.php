<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating a backup region with exactly one required option.
 */
class ShopifyBackupRegionUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["countryCode"];

    protected $countryCode;

    /**
     * A country code for the backup region.
     */
    public function setCountryCode($shopifyCountryCode): static
    {
        $this->countryCode = new RawObject($shopifyCountryCode);

        return $this;
    }
}
