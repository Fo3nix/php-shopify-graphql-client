<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionContractCreateCalculateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["contractCreateInput"];

    protected $contractCreateInput;

    /**
     * The input for the new subscription contract calculation.
     */
    public function setContractCreateInput(ShopifySubscriptionContractCalculationContractCreateInputInputObject $shopifySubscriptionContractCalculationContractCreateInputInputObject): static
    {
        $this->contractCreateInput = $shopifySubscriptionContractCalculationContractCreateInputInputObject;

        return $this;
    }
}
