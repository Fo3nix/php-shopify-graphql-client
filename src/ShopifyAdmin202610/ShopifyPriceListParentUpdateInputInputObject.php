<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to update a price list's adjustment.
 */
class ShopifyPriceListParentUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["adjustment"];

    protected $adjustment;
    protected $settings;

    /**
     * The relative adjustments to other prices..
     */
    public function setAdjustment(ShopifyPriceListAdjustmentInputInputObject $shopifyPriceListAdjustmentInputInputObject): static
    {
        $this->adjustment = $shopifyPriceListAdjustmentInputInputObject;

        return $this;
    }

    /**
     * The price list adjustment settings.
     */
    public function setSettings(ShopifyPriceListAdjustmentSettingsInputInputObject $shopifyPriceListAdjustmentSettingsInputInputObject): static
    {
        $this->settings = $shopifyPriceListAdjustmentSettingsInputInputObject;

        return $this;
    }
}
