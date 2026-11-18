<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyCashDrawerNetSalesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["dateRange"];

    protected $dateRange;

    /**
     * The date and time range for filtering net sales.
     */
    public function setDateRange(ShopifyCashDrawerDateRangeInputInputObject $shopifyCashDrawerDateRangeInputInputObject): static
    {
        $this->dateRange = $shopifyCashDrawerDateRangeInputInputObject;

        return $this;
    }
}
