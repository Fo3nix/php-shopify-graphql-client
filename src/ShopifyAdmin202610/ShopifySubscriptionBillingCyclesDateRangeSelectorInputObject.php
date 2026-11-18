<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to select a subset of subscription billing cycles within a date range.
 */
class ShopifySubscriptionBillingCyclesDateRangeSelectorInputObject extends InputObject
{
    const REQUIRED = ["startDate", "endDate"];

    protected $startDate;
    protected $endDate;

    /**
     * The start date and time for the range.
     */
    public function setStartDate($startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * The end date and time for the range.
     */
    public function setEndDate($endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }
}
