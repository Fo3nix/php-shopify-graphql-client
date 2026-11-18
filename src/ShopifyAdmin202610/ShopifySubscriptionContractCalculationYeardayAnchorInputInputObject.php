<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for yearday anchor in the calculate API.
 */
class ShopifySubscriptionContractCalculationYeardayAnchorInputInputObject extends InputObject
{
    const REQUIRED = ["dayOfMonth", "month"];

    protected $dayOfMonth;
    protected $month;

    /**
     * Day of month: 1-31.
     */
    public function setDayOfMonth($dayOfMonth): static
    {
        $this->dayOfMonth = $dayOfMonth;

        return $this;
    }

    /**
     * Month: 1-12.
     */
    public function setMonth($month): static
    {
        $this->month = $month;

        return $this;
    }
}
