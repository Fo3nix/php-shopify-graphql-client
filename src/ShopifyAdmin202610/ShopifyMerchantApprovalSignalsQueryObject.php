<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Merchant approval for accelerated onboarding to channel integration apps.
 */
class ShopifyMerchantApprovalSignalsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MerchantApprovalSignals";

    /**
     * Whether the shop's Shopify Payments account identity is verified. Returns `false` if the identity is unverified or if the shop doesn't have a Shopify Payments account.
     */
    public function selectIdentityVerified(): static
    {
        $this->selectField("identityVerified");

        return $this;
    }

    /**
     * Whether Shopify has pre-verified the merchant's business for onboarding to channel integration apps. Returns `false` if the shop isn't marked for verification.
     */
    public function selectVerifiedByShopify(): static
    {
        $this->selectField("verifiedByShopify");

        return $this;
    }

    /**
     * Which tier of the Shopify verification was determined for the merchant's business for onboarding to channel integration apps.
     */
    public function selectVerifiedByShopifyTier(): static
    {
        $this->selectField("verifiedByShopifyTier");

        return $this;
    }
}
