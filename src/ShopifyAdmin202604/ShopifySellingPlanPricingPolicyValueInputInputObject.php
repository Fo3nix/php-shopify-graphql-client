<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to create or update a pricing policy adjustment value.
 */
class ShopifySellingPlanPricingPolicyValueInputInputObject extends InputObject
{
    protected $percentage;
    protected $fixedValue;

    /**
     * The percentage value.
     */
    public function setPercentage($percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * The fixed value for an fixed amount off or a new policy price.
     */
    public function setFixedValue($fixedValue): static
    {
        $this->fixedValue = $fixedValue;

        return $this;
    }
}
