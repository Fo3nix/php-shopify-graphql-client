<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a weight-based rate.
 */
class ShopifyDeliveryWeightBasedRateCreateInputInputObject extends InputObject
{
    const REQUIRED = ["price", "minWeight"];

    protected $price;
    protected $transitTimeMinSeconds;
    protected $transitTimeMaxSeconds;
    protected $minWeight;
    protected $maxWeight;

    /**
     * The price charged for this rate tier.
     */
    public function setPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->price = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The minimum estimated transit time in seconds.
     */
    public function setTransitTimeMinSeconds($transitTimeMinSeconds): static
    {
        $this->transitTimeMinSeconds = $transitTimeMinSeconds;

        return $this;
    }

    /**
     * The maximum estimated transit time in seconds.
     */
    public function setTransitTimeMaxSeconds($transitTimeMaxSeconds): static
    {
        $this->transitTimeMaxSeconds = $transitTimeMaxSeconds;

        return $this;
    }

    /**
     * The minimum package weight for this rate tier.
     */
    public function setMinWeight(ShopifyWeightInputInputObject $shopifyWeightInputInputObject): static
    {
        $this->minWeight = $shopifyWeightInputInputObject;

        return $this;
    }

    /**
     * The maximum package weight for this rate tier. If omitted, the tier has no upper weight limit.
     */
    public function setMaxWeight(ShopifyWeightInputInputObject $shopifyWeightInputInputObject): static
    {
        $this->maxWeight = $shopifyWeightInputInputObject;

        return $this;
    }
}
