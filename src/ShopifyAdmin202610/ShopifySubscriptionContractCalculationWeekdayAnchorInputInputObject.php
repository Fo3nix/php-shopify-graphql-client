<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for weekday anchor in the calculate API.
 */
class ShopifySubscriptionContractCalculationWeekdayAnchorInputInputObject extends InputObject
{
    const REQUIRED = ["dayOfWeek"];

    protected $dayOfWeek;

    /**
     * Day of the week for the weekday anchor.
     */
    public function setDayOfWeek($shopifyDayOfTheWeek): static
    {
        $this->dayOfWeek = new RawObject($shopifyDayOfTheWeek);

        return $this;
    }
}
