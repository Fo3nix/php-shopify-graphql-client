<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a weight-based rate.
 */
class ShopifyDeliveryWeightBasedRateUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $price;
    protected $transitTimeMinSeconds;
    protected $transitTimeMaxSeconds;
    protected $minWeight;
    protected $maxWeight;

    /**
     * The globally unique ID of the weight-based rate to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

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
     * The maximum package weight for this rate tier. Null means no upper weight limit.
     */
    public function setMaxWeight(ShopifyWeightInputInputObject $shopifyWeightInputInputObject): static
    {
        $this->maxWeight = $shopifyWeightInputInputObject;

        return $this;
    }
}
