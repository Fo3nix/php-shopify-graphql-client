<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyCashDrawerTotalRefundsArgumentsObject extends ArgumentsObject
{
    protected $dateRange;

    public function setDateRange(ShopifyCashDrawerDateRangeInputInputObject $shopifyCashDrawerDateRangeInputInputObject)
    {
        $this->dateRange = $shopifyCashDrawerDateRangeInputInputObject;

        return $this;
    }
}
