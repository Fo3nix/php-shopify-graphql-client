<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to specify a discount to the recurring pricing portion of a subscription over a number of billing intervals.
 */
class ShopifyAppSubscriptionDiscountInputInputObject extends InputObject
{
    protected $value;
    protected $durationLimitInIntervals;

    /**
     * The value to be discounted every billing interval.
     */
    public function setValue(ShopifyAppSubscriptionDiscountValueInputInputObject $shopifyAppSubscriptionDiscountValueInputInputObject): static
    {
        $this->value = $shopifyAppSubscriptionDiscountValueInputInputObject;

        return $this;
    }

    /**
     * The total number of billing intervals to which the discount will be applied. Must be greater than 0.
     * The discount will be applied to an indefinite number of billing intervals if this value is left blank.
     */
    public function setDurationLimitInIntervals($durationLimitInIntervals): static
    {
        $this->durationLimitInIntervals = $durationLimitInIntervals;

        return $this;
    }
}
