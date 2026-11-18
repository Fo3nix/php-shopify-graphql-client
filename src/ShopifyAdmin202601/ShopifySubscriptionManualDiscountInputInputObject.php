<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a subscription discount on a contract.
 */
class ShopifySubscriptionManualDiscountInputInputObject extends InputObject
{
    protected $title;
    protected $value;
    protected $recurringCycleLimit;
    protected $entitledLines;

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

    /**
     * Entitled line items used to apply the subscription discount on.
     */
    public function setEntitledLines(ShopifySubscriptionManualDiscountEntitledLinesInputInputObject $shopifySubscriptionManualDiscountEntitledLinesInputInputObject): static
    {
        $this->entitledLines = $shopifySubscriptionManualDiscountEntitledLinesInputInputObject;

        return $this;
    }
}
