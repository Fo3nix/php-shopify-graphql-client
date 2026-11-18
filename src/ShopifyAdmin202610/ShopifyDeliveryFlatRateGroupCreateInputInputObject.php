<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a flat rate group.
 */
class ShopifyDeliveryFlatRateGroupCreateInputInputObject extends InputObject
{
    const REQUIRED = ["rate"];

    protected $rate;
    protected $conditions;

    /**
     * The fixed-price rate and optional transit time.
     */
    public function setRate(ShopifyDeliveryFlatRateCreateInputInputObject $shopifyDeliveryFlatRateCreateInputInputObject): static
    {
        $this->rate = $shopifyDeliveryFlatRateCreateInputInputObject;

        return $this;
    }

    /**
     * Collection and origin location conditions for this rate group.
     */
    public function setConditions(ShopifyDeliveryRateConditionsCreateInputInputObject $shopifyDeliveryRateConditionsCreateInputInputObject): static
    {
        $this->conditions = $shopifyDeliveryRateConditionsCreateInputInputObject;

        return $this;
    }
}
