<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionBillingCycleBulkSearchArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["billingAttemptExpectedDateRange"];

    protected $billingAttemptExpectedDateRange;
    protected $filters;

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
}
