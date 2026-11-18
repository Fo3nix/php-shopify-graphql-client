<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the settings of price list adjustments.
 */
class ShopifyPriceListAdjustmentSettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListAdjustmentSettings";

    /**
     * The type of price list adjustment setting for compare at price.
     */
    public function selectCompareAtMode(): static
    {
        $this->selectField("compareAtMode");

        return $this;
    }
}
