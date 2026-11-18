<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a weight-based rate group.
 */
class ShopifyDeliveryWeightBasedRateGroupCreateInputInputObject extends InputObject
{
    const REQUIRED = ["rates", "conditions"];

    protected $rates;
    protected $conditions;

    /**
     * The weight-based rates for this rate group.
     */
    public function setRates(array $rates): static
    {
        $this->rates = $rates;

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
