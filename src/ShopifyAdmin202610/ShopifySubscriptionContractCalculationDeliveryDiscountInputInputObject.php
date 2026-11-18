<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for delivery discount in the calculate API.
 */
class ShopifySubscriptionContractCalculationDeliveryDiscountInputInputObject extends InputObject
{
    const REQUIRED = ["title", "value", "recurringCycleLimit"];

    protected $id;
    protected $title;
    protected $value;
    protected $recurringCycleLimit;

    /**
     * The ID of an existing discount to update. Omit for new discounts.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The title of the delivery discount.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The value of the discount (percentage or fixed amount).
     */
    public function setValue(ShopifySubscriptionContractCalculationDiscountValueInputInputObject $shopifySubscriptionContractCalculationDiscountValueInputInputObject): static
    {
        $this->value = $shopifySubscriptionContractCalculationDiscountValueInputInputObject;

        return $this;
    }

    /**
     * The number of billing cycles this discount applies to. Use 0 for no limit.
     */
    public function setRecurringCycleLimit($recurringCycleLimit): static
    {
        $this->recurringCycleLimit = $recurringCycleLimit;

        return $this;
    }
}
