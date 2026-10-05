<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyCashDrawerTotalSalesArgumentsObject extends ArgumentsObject
{
    protected $dateRange;

    public function setDateRange(ShopifyCashDrawerDateRangeInputInputObject $shopifyCashDrawerDateRangeInputInputObject)
    {
        $this->dateRange = $shopifyCashDrawerDateRangeInputInputObject;

        return $this;
    }
}
