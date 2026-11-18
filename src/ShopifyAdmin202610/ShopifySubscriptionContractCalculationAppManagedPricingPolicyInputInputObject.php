<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the app-managed pricing policy on a subscription line, the calculate API equivalent of `SubscriptionPricingPolicyInput`. The policy is informational metadata and doesn't drive pricing; the line's price field does. When you restate a line without it, the stored policy is cleared.
 */
class ShopifySubscriptionContractCalculationAppManagedPricingPolicyInputInputObject extends InputObject
{
    const REQUIRED = ["basePrice", "cyclePriceAdjustments"];

    protected $basePrice;
    protected $cyclePriceAdjustments;

    /**
     * The base price per unit for the subscription line. The amount must be greater than or equal to 0.
     */
    public function setBasePrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->basePrice = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The expected pricing changes for each billing cycle.
     */
    public function setCyclePriceAdjustments(array $cyclePriceAdjustments): static
    {
        $this->cyclePriceAdjustments = $cyclePriceAdjustments;

        return $this;
    }
}
