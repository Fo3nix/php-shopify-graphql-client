<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create or update an inventory policy.
 */
class ShopifySellingPlanInventoryPolicyInputInputObject extends InputObject
{
    protected $reserve;

    /**
     * When to reserve inventory for the order. The value must be ON_FULFILLMENT or ON_SALE.
     */
    public function setReserve($shopifySellingPlanReserve): static
    {
        $this->reserve = new RawObject($shopifySellingPlanReserve);

        return $this;
    }
}
