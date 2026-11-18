<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for mapping a subscription line to a discount.
 */
class ShopifySubscriptionAtomicManualDiscountInputInputObject extends InputObject
{
    protected $title;
    protected $value;
    protected $recurringCycleLimit;

    /**
     * The title associated with the subscription discount.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Percentage or fixed amount value of the discount.
     */
    public function setValue(ShopifySubscriptionManualDiscountValueInputInputObject $shopifySubscriptionManualDiscountValueInputInputObject): static
    {
        $this->value = $shopifySubscriptionManualDiscountValueInputInputObject;

        return $this;
    }

    /**
     * The maximum number of times the subscription discount will be applied on orders.
     */
    public function setRecurringCycleLimit($recurringCycleLimit): static
    {
        $this->recurringCycleLimit = $recurringCycleLimit;

        return $this;
    }
}
