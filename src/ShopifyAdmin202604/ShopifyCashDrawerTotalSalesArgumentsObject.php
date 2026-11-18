<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyCashDrawerTotalSalesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["dateRange"];

    protected $dateRange;

    /**
     * The date and time range for filtering sales.
     */
    public function setDateRange(ShopifyCashDrawerDateRangeInputInputObject $shopifyCashDrawerDateRangeInputInputObject): static
    {
        $this->dateRange = $shopifyCashDrawerDateRangeInputInputObject;

        return $this;
    }
}
