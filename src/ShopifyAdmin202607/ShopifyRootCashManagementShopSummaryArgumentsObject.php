<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootCashManagementShopSummaryArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["currencyCode", "startDate", "endDate"];

    protected $currencyCode;
    protected $startDate;
    protected $endDate;

    /**
     * The currency code to filter by.
     */
    public function setCurrencyCode($shopifyCurrencyCode): static
    {
        $this->currencyCode = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    /**
     * The start date to summarize from.
     */
    public function setStartDate($startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * The end date to summarize to.
     */
    public function setEndDate($endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }
}
