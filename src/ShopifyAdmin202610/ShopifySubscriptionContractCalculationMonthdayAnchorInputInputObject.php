<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for monthday anchor in the calculate API.
 */
class ShopifySubscriptionContractCalculationMonthdayAnchorInputInputObject extends InputObject
{
    const REQUIRED = ["dayOfMonth"];

    protected $dayOfMonth;

    /**
     * Day of month: 1-31. For months with fewer days, will use the last day of the month.
     */
    public function setDayOfMonth($dayOfMonth): static
    {
        $this->dayOfMonth = $dayOfMonth;

        return $this;
    }
}
