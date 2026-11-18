<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for subscription contract anchors used for contract calculation.
 * This is a oneOf input: one, and only one, field can be provided.
 */
class ShopifySubscriptionContractCalculationAnchorInputInputObject extends InputObject
{
    protected $weekday;
    protected $monthday;
    protected $yearday;

    /**
     * Anchor to a specific day of the week.
     */
    public function setWeekday(ShopifySubscriptionContractCalculationWeekdayAnchorInputInputObject $shopifySubscriptionContractCalculationWeekdayAnchorInputInputObject): static
    {
        $this->weekday = $shopifySubscriptionContractCalculationWeekdayAnchorInputInputObject;

        return $this;
    }

    /**
     * Anchor to a specific day of the month.
     */
    public function setMonthday(ShopifySubscriptionContractCalculationMonthdayAnchorInputInputObject $shopifySubscriptionContractCalculationMonthdayAnchorInputInputObject): static
    {
        $this->monthday = $shopifySubscriptionContractCalculationMonthdayAnchorInputInputObject;

        return $this;
    }

    /**
     * Anchor to a specific day of the year.
     */
    public function setYearday(ShopifySubscriptionContractCalculationYeardayAnchorInputInputObject $shopifySubscriptionContractCalculationYeardayAnchorInputInputObject): static
    {
        $this->yearday = $shopifySubscriptionContractCalculationYeardayAnchorInputInputObject;

        return $this;
    }
}
