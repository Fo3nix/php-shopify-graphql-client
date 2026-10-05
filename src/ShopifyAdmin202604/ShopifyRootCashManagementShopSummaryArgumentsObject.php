<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootCashManagementShopSummaryArgumentsObject extends ArgumentsObject
{
    protected $currencyCode;
    protected $startDate;
    protected $endDate;

    public function setCurrencyCode($shopifyCurrencyCode)
    {
        $this->currencyCode = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }
}
