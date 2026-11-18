<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The eligibility details of an order's protection against fraudulent chargebacks by Shopify Protect.
 */
class ShopifyShopifyProtectOrderEligibilityQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyProtectOrderEligibility";

    /**
     * The status of whether an order is eligible for protection against fraudulent chargebacks.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
