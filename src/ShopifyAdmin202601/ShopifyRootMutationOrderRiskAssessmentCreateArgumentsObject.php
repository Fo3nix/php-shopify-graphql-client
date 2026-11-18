<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderRiskAssessmentCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["orderRiskAssessmentInput"];

    protected $orderRiskAssessmentInput;

    /**
     * The input for creating an order risk assessment.
     */
    public function setOrderRiskAssessmentInput(ShopifyOrderRiskAssessmentCreateInputInputObject $shopifyOrderRiskAssessmentCreateInputInputObject): static
    {
        $this->orderRiskAssessmentInput = $shopifyOrderRiskAssessmentCreateInputInputObject;

        return $this;
    }
}
