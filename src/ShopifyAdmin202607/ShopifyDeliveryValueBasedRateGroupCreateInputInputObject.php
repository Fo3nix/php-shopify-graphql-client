<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a rate group for a value-based shipping option.
 */
class ShopifyDeliveryValueBasedRateGroupCreateInputInputObject extends InputObject
{
    const REQUIRED = ["rates", "conditions"];

    protected $rates;
    protected $conditions;

    /**
     * The rates to create in this rate group.
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
