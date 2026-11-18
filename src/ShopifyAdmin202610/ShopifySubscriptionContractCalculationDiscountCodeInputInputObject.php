<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a discount code in the calculate API.
 */
class ShopifySubscriptionContractCalculationDiscountCodeInputInputObject extends InputObject
{
    const REQUIRED = ["redeemCode"];

    protected $redeemCode;

    /**
     * The discount code to apply to the subscription contract.
     */
    public function setRedeemCode($redeemCode): static
    {
        $this->redeemCode = $redeemCode;

        return $this;
    }
}
