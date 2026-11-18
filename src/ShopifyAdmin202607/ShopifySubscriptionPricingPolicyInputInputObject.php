<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for expected price changes of the subscription line over time.
 */
class ShopifySubscriptionPricingPolicyInputInputObject extends InputObject
{
    const REQUIRED = ["basePrice", "cycleDiscounts"];

    protected $basePrice;
    protected $cycleDiscounts;

    /**
     * The base price per unit for the subscription line in the contract's currency.
     */
    public function setBasePrice($basePrice): static
    {
        $this->basePrice = $basePrice;

        return $this;
    }

    /**
     * An array containing all pricing changes for each billing cycle.
     */
    public function setCycleDiscounts(array $cycleDiscounts): static
    {
        $this->cycleDiscounts = $cycleDiscounts;

        return $this;
    }
}
