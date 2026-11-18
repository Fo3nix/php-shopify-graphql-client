<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationSubscriptionBillingCycleBulkChargeArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["billingAttemptExpectedDateRange"];

    protected $billingAttemptExpectedDateRange;
    protected $filters;
    protected $actor;
    protected $inventoryPolicy;
    protected $paymentProcessingPolicy;

    /**
     * Specifies the date range within which the `billingAttemptExpectedDate` values of the billing cycles should fall.
     */
    public function setBillingAttemptExpectedDateRange(ShopifySubscriptionBillingCyclesDateRangeSelectorInputObject $shopifySubscriptionBillingCyclesDateRangeSelectorInputObject): static
    {
        $this->billingAttemptExpectedDateRange = $shopifySubscriptionBillingCyclesDateRangeSelectorInputObject;

        return $this;
    }

    /**
     * Criteria to filter the billing cycles on which the action is executed.
     */
    public function setFilters(ShopifySubscriptionBillingCycleBulkFiltersInputObject $shopifySubscriptionBillingCycleBulkFiltersInputObject): static
    {
        $this->filters = $shopifySubscriptionBillingCycleBulkFiltersInputObject;

        return $this;
    }

    /**
     * The actor who initiated a subscription action.
     */
    public function setActor($shopifySubscriptionActor): static
    {
        $this->actor = new RawObject($shopifySubscriptionActor);

        return $this;
    }

    /**
     * The behaviour to use when updating inventory.
     */
    public function setInventoryPolicy($shopifySubscriptionBillingAttemptInventoryPolicy): static
    {
        $this->inventoryPolicy = new RawObject($shopifySubscriptionBillingAttemptInventoryPolicy);

        return $this;
    }

    /**
     * Selected payment processing policy for the billing attempt. Defaults to FAIL_UNLESS_VALID_PAYMENT_METHOD.
     */
    public function setPaymentProcessingPolicy($shopifySubscriptionBillingAttemptPaymentProcessingPolicy): static
    {
        $this->paymentProcessingPolicy = new RawObject($shopifySubscriptionBillingAttemptPaymentProcessingPolicy);

        return $this;
    }
}
