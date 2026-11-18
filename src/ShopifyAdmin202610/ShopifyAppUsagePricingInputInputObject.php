<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to issue arbitrary charges for app usage associated with a subscription.
 */
class ShopifyAppUsagePricingInputInputObject extends InputObject
{
    const REQUIRED = ["cappedAmount", "terms"];

    protected $cappedAmount;
    protected $terms;

    /**
     * The maximum amount of usage charges that can be incurred within a subscription billing interval.
     */
    public function setCappedAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->cappedAmount = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The terms and conditions for app usage. These terms stipulate the pricing model for the charges that an app creates.
     */
    public function setTerms($terms): static
    {
        $this->terms = $terms;

        return $this;
    }
}
