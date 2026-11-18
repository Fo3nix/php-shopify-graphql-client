<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the Bundles feature configuration for the shop.
 */
class ShopifyBundlesFeatureQueryObject extends QueryObject
{
    const OBJECT_NAME = "BundlesFeature";

    /**
     * Whether a shop is configured properly to sell bundles.
     */
    public function selectEligibleForBundles(): static
    {
        $this->selectField("eligibleForBundles");

        return $this;
    }

    /**
     * The reason why a shop is not eligible for bundles.
     */
    public function selectIneligibilityReason(): static
    {
        $this->selectField("ineligibilityReason");

        return $this;
    }

    /**
     * Whether a shop has any fixed bundle products or has a cartTransform function installed.
     */
    public function selectSellsBundles(): static
    {
        $this->selectField("sellsBundles");

        return $this;
    }
}
