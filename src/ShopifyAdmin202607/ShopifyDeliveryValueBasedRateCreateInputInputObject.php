<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a value-based rate.
 */
class ShopifyDeliveryValueBasedRateCreateInputInputObject extends InputObject
{
    const REQUIRED = ["price", "minValue"];

    protected $price;
    protected $minValue;
    protected $maxValue;
    protected $transitTimeMinSeconds;
    protected $transitTimeMaxSeconds;

    /**
     * The price charged for this rate.
     */
    public function setPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->price = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The minimum cart value (inclusive) for this rate.
     */
    public function setMinValue(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->minValue = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The maximum cart value (inclusive) for this rate. Omit for no upper limit.
     */
    public function setMaxValue(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->maxValue = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The minimum transit time estimate in seconds.
     */
    public function setTransitTimeMinSeconds($transitTimeMinSeconds): static
    {
        $this->transitTimeMinSeconds = $transitTimeMinSeconds;

        return $this;
    }

    /**
     * The maximum transit time estimate in seconds.
     */
    public function setTransitTimeMaxSeconds($transitTimeMaxSeconds): static
    {
        $this->transitTimeMaxSeconds = $transitTimeMaxSeconds;

        return $this;
    }
}
