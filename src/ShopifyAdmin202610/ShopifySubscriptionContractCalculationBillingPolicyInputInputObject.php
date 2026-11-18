<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for subscription billing policy used for contract calculation.
 */
class ShopifySubscriptionContractCalculationBillingPolicyInputInputObject extends InputObject
{
    const REQUIRED = ["cadence"];

    protected $anchors;
    protected $cadence;

    /**
     * The anchors for calculating billing cycle dates.
     */
    public function setAnchors(array $anchors): static
    {
        $this->anchors = $anchors;

        return $this;
    }

    /**
     * The cadence for calculating billing cycle dates.
     */
    public function setCadence(ShopifySubscriptionContractCalculationCadenceInputInputObject $shopifySubscriptionContractCalculationCadenceInputInputObject): static
    {
        $this->cadence = $shopifySubscriptionContractCalculationCadenceInputInputObject;

        return $this;
    }
}
