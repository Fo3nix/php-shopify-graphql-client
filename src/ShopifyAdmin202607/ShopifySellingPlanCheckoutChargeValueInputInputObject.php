<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to create or update an checkout charge value.
 */
class ShopifySellingPlanCheckoutChargeValueInputInputObject extends InputObject
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
     * The fixed value for an checkout charge.
     */
    public function setFixedValue($fixedValue): static
    {
        $this->fixedValue = $fixedValue;

        return $this;
    }
}
