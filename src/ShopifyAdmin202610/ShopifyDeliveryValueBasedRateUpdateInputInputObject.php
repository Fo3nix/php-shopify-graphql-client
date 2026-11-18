<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a value-based rate.
 */
class ShopifyDeliveryValueBasedRateUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $price;
    protected $minValue;
    protected $maxValue;
    protected $transitTimeMinSeconds;
    protected $transitTimeMaxSeconds;

    /**
     * The ID of the rate to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The price charged for this rate.
     */
    public function setPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->price = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The minimum cart value for this rate.
     */
    public function setMinValue(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->minValue = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The maximum cart value (inclusive) for this rate. Set to null for no upper limit.
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
