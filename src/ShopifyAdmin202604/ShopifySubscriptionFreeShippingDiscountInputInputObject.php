<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a subscription free shipping discount on a contract.
 */
class ShopifySubscriptionFreeShippingDiscountInputInputObject extends InputObject
{
    protected $title;
    protected $recurringCycleLimit;

    /**
     * The title associated with the subscription free shipping discount.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The maximum number of times the subscription free shipping discount will be applied on orders.
     */
    public function setRecurringCycleLimit($recurringCycleLimit): static
    {
        $this->recurringCycleLimit = $recurringCycleLimit;

        return $this;
    }
}
