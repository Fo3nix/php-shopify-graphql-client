<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The shop's billing plan and subscription details. Indicates the plan tier (such as Basic, Advanced, or Plus), whether the shop has a Shopify Plus subscription, and if it's a dev store for testing.
 */
class ShopifyShopPlanQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPlan";

    /**
     * The name of the shop's billing plan.
     *
     * @deprecated Use `publicDisplayName` instead.
     */
    public function selectDisplayName(): static
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * Whether the shop is a partner development shop for testing purposes.
     */
    public function selectPartnerDevelopment(): static
    {
        $this->selectField("partnerDevelopment");

        return $this;
    }

    /**
     * The public display name of the shop's billing plan. Possible values are: Advanced, Agentic, Agentic Enterprise, Basic, Development, Grow, Inactive, Lite, Other, Paused, Plus, Plus Trial, Retail, Shop Component, Shop Component Plus, Staff Business, Starter, and Trial.
     */
    public function selectPublicDisplayName(): static
    {
        $this->selectField("publicDisplayName");

        return $this;
    }

    /**
     * Whether the shop has a Shopify Plus subscription.
     */
    public function selectShopifyPlus(): static
    {
        $this->selectField("shopifyPlus");

        return $this;
    }
}
