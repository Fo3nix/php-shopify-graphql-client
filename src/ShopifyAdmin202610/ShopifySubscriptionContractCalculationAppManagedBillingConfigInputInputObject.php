<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for app-managed billing configuration for subscriptions contracts. These fields are stored on the contract but are not used to calculate billing cycle dates.
 */
class ShopifySubscriptionContractCalculationAppManagedBillingConfigInputInputObject extends InputObject
{
    protected $minCycles;
    protected $maxCycles;

    /**
     * The minimum number of billing cycles.
     */
    public function setMinCycles($minCycles): static
    {
        $this->minCycles = $minCycles;

        return $this;
    }

    /**
     * The maximum number of billing cycles.
     */
    public function setMaxCycles($maxCycles): static
    {
        $this->maxCycles = $maxCycles;

        return $this;
    }
}
