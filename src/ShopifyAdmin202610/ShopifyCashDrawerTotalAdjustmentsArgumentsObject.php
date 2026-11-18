<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyCashDrawerTotalAdjustmentsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["dateRange"];

    protected $dateRange;

    /**
     * The date and time range for filtering adjustments.
     */
    public function setDateRange(ShopifyCashDrawerDateRangeInputInputObject $shopifyCashDrawerDateRangeInputInputObject): static
    {
        $this->dateRange = $shopifyCashDrawerDateRangeInputInputObject;

        return $this;
    }
}
