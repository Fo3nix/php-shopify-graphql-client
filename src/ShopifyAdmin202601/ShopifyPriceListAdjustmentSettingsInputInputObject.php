<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to set a price list's adjustment settings.
 */
class ShopifyPriceListAdjustmentSettingsInputInputObject extends InputObject
{
    protected $compareAtMode;

    /**
     * Determines how adjustments are applied to compare at prices.
     */
    public function setCompareAtMode($shopifyPriceListCompareAtMode): static
    {
        $this->compareAtMode = new RawObject($shopifyPriceListCompareAtMode);

        return $this;
    }
}
