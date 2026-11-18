<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for filtering subscription billing cycles in bulk actions.
 */
class ShopifySubscriptionBillingCycleBulkFiltersInputObject extends InputObject
{
    protected $billingCycleStatus;
    protected $contractStatus;
    protected $billingAttemptStatus;

    /**
     * Filters the billing cycles based on their status.
     */
    public function setBillingCycleStatus(array $billingCycleStatus): static
    {
        $this->billingCycleStatus = array_map(function ($value) {
            return new RawObject($value);
        }, $billingCycleStatus);

        return $this;
    }

    /**
     * Filters the billing cycles based on the status of their associated subscription contracts.
     */
    public function setContractStatus(array $contractStatus): static
    {
        $this->contractStatus = array_map(function ($value) {
            return new RawObject($value);
        }, $contractStatus);

        return $this;
    }

    /**
     * Filters the billing cycles based on the presence of billing attempts.
     */
    public function setBillingAttemptStatus($shopifySubscriptionBillingCycleBillingAttemptStatus): static
    {
        $this->billingAttemptStatus = new RawObject($shopifySubscriptionBillingCycleBillingAttemptStatus);

        return $this;
    }
}
