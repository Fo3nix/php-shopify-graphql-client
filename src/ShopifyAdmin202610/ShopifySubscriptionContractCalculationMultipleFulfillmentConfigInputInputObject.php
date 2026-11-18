<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for multiple fulfillment configuration used for contract calculation.
 */
class ShopifySubscriptionContractCalculationMultipleFulfillmentConfigInputInputObject extends InputObject
{
    const REQUIRED = ["cadence", "numberOfFulfillments"];

    protected $cadence;
    protected $numberOfFulfillments;

    /**
     * The cadence for calculating fulfillment dates for multiple fulfillments.
     */
    public function setCadence(ShopifySubscriptionContractCalculationCadenceInputInputObject $shopifySubscriptionContractCalculationCadenceInputInputObject): static
    {
        $this->cadence = $shopifySubscriptionContractCalculationCadenceInputInputObject;

        return $this;
    }

    /**
     * The number of fulfillments per billing cycle. Must be at least 2.
     */
    public function setNumberOfFulfillments($numberOfFulfillments): static
    {
        $this->numberOfFulfillments = $numberOfFulfillments;

        return $this;
    }
}
