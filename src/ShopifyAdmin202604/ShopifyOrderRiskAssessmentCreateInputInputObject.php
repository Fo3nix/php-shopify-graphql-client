<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for creating an order risk assessment.
 */
class ShopifyOrderRiskAssessmentCreateInputInputObject extends InputObject
{
    const REQUIRED = ["orderId", "riskLevel", "facts"];

    protected $orderId;
    protected $riskLevel;
    protected $facts;

    /**
     * The ID of the order to assess.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * The risk level assigned to the order.
     */
    public function setRiskLevel($shopifyRiskAssessmentResult): static
    {
        $this->riskLevel = new RawObject($shopifyRiskAssessmentResult);

        return $this;
    }

    /**
     * Facts to include with the risk assessment. Up to 20 facts can be provided.
     */
    public function setFacts(array $facts): static
    {
        $this->facts = $facts;

        return $this;
    }
}
