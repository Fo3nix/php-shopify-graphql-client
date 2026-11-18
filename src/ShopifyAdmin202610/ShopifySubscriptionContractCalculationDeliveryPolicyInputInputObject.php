<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for subscription delivery policy used for contract calculation.
 */
class ShopifySubscriptionContractCalculationDeliveryPolicyInputInputObject extends InputObject
{
    protected $anchors;
    protected $multiFulfillment;

    /**
     * The anchors for calculating fulfillment dates.
     */
    public function setAnchors(array $anchors): static
    {
        $this->anchors = $anchors;

        return $this;
    }

    /**
     * Configuration for multiple fulfillment deliveries.
     */
    public function setMultiFulfillment(ShopifySubscriptionContractCalculationMultipleFulfillmentConfigInputInputObject $shopifySubscriptionContractCalculationMultipleFulfillmentConfigInputInputObject): static
    {
        $this->multiFulfillment = $shopifySubscriptionContractCalculationMultipleFulfillmentConfigInputInputObject;

        return $this;
    }
}
