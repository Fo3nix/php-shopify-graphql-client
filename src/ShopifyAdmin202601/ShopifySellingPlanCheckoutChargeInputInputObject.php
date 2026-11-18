<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields that are required to create or update a checkout charge.
 */
class ShopifySellingPlanCheckoutChargeInputInputObject extends InputObject
{
    protected $type;
    protected $value;

    /**
     * The checkout charge type defined by the policy.
     */
    public function setType($shopifySellingPlanCheckoutChargeType): static
    {
        $this->type = new RawObject($shopifySellingPlanCheckoutChargeType);

        return $this;
    }

    /**
     * The checkout charge value defined by the policy.
     */
    public function setValue(ShopifySellingPlanCheckoutChargeValueInputInputObject $shopifySellingPlanCheckoutChargeValueInputInputObject): static
    {
        $this->value = $shopifySellingPlanCheckoutChargeValueInputInputObject;

        return $this;
    }
}
