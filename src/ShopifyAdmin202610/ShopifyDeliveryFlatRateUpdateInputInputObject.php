<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a flat rate.
 */
class ShopifyDeliveryFlatRateUpdateInputInputObject extends InputObject
{
    protected $price;
    protected $transitTimeMinSeconds;
    protected $transitTimeMaxSeconds;

    /**
     * The fixed price charged for this rate.
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
}
