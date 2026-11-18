<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Quantity of prerequisite items required for the price rule to be applicable, compared to quantity of entitled items.
 */
class ShopifyPriceRulePrerequisiteToEntitlementQuantityRatioQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceRulePrerequisiteToEntitlementQuantityRatio";

    /**
     * The quantity of entitled items in the ratio.
     */
    public function selectEntitlementQuantity(): static
    {
        $this->selectField("entitlementQuantity");

        return $this;
    }

    /**
     * The quantity of prerequisite items in the ratio.
     */
    public function selectPrerequisiteQuantity(): static
    {
        $this->selectField("prerequisiteQuantity");

        return $this;
    }
}
