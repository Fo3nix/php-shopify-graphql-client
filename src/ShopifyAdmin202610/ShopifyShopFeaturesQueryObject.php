<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the feature set available to the shop.
 * Most fields specify whether a feature is enabled for a shop, and some fields return information
 * related to specific features.
 */
class ShopifyShopFeaturesQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopFeatures";

    /**
     * Whether a shop has access to Avalara AvaTax.
     */
    public function selectAvalaraAvatax(): static
    {
        $this->selectField("avalaraAvatax");

        return $this;
    }

    /**
     * The branding of the shop, which influences its look and feel in the Shopify admin.
     */
    public function selectBranding(): static
    {
        $this->selectField("branding");

        return $this;
    }

    /**
     * Represents the Bundles feature configuration for the shop.
     */
    public function selectBundles(?ShopifyShopFeaturesBundlesArgumentsObject $argsObject = null): ShopifyBundlesFeatureQueryObject
    {
        $object = new ShopifyBundlesFeatureQueryObject("bundles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the buyer experience deposit configuration is enabled.
     */
    public function selectBuyerExperienceDepositEnabled(): static
    {
        $this->selectField("buyerExperienceDepositEnabled");

        return $this;
    }

    /**
     * Whether a shop's online store can have CAPTCHA protection.
     */
    public function selectCaptcha(): static
    {
        $this->selectField("captcha");

        return $this;
    }

    /**
     * Whether a shop's online store can have CAPTCHA protection for domains not managed by Shopify.
     *
     * @deprecated No longer required for external domains
     */
    public function selectCaptchaExternalDomains(): static
    {
        $this->selectField("captchaExternalDomains");

        return $this;
    }

    /**
     * Represents the cart transform feature configuration for the shop.
     */
    public function selectCartTransform(?ShopifyShopFeaturesCartTransformArgumentsObject $argsObject = null): ShopifyCartTransformFeatureQueryObject
    {
        $object = new ShopifyCartTransformFeatureQueryObject("cartTransform");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the delivery profiles functionality is enabled for this shop.
     *
     * @deprecated Delivery profiles are now 100% enabled across Shopify.
     */
    public function selectDeliveryProfiles(): static
    {
        $this->selectField("deliveryProfiles");

        return $this;
    }

    /**
     * Whether the direct connection catalog assignment is enabled.
     */
    public function selectDirectConnectionCatalogAssignmentEnabled(): static
    {
        $this->selectField("directConnectionCatalogAssignmentEnabled");

        return $this;
    }

    /**
     * Whether a shop has access to the Google Analytics dynamic remarketing feature.
     */
    public function selectDynamicRemarketing(): static
    {
        $this->selectField("dynamicRemarketing");

        return $this;
    }

    /**
     * Whether a shop can be migrated to use Shopify subscriptions.
     */
    public function selectEligibleForSubscriptionMigration(): static
    {
        $this->selectField("eligibleForSubscriptionMigration");

        return $this;
    }

    /**
     * Whether a shop is configured properly to sell subscriptions.
     */
    public function selectEligibleForSubscriptions(): static
    {
        $this->selectField("eligibleForSubscriptions");

        return $this;
    }

    /**
     * Whether a shop can create gift cards.
     */
    public function selectGiftCards(): static
    {
        $this->selectField("giftCards");

        return $this;
    }

    /**
     * Whether a shop displays Harmonized System codes on products. This is used for customs when shipping
     * internationally.
     */
    public function selectHarmonizedSystemCode(): static
    {
        $this->selectField("harmonizedSystemCode");

        return $this;
    }

    /**
     * Whether a shop can enable international domains.
     *
     * @deprecated All shops have international domains through Shopify Markets.
     */
    public function selectInternationalDomains(): static
    {
        $this->selectField("internationalDomains");

        return $this;
    }

    /**
     * Whether a shop can enable international price overrides.
     *
     * @deprecated Use the `markets` field on `EntitlementsType`.
    Each market entitlement has a `catalogs` field that indicates
    whether the shop's markets have access to catalogs and price overrides.
     */
    public function selectInternationalPriceOverrides(): static
    {
        $this->selectField("internationalPriceOverrides");

        return $this;
    }

    /**
     * Whether a shop can enable international price rules.
     *
     * @deprecated Use the `markets` field on `EntitlementsType`.
    Each market entitlement has a `catalogs` field that indicates
    whether the shop's markets have access to catalogs and price overrides.
     */
    public function selectInternationalPriceRules(): static
    {
        $this->selectField("internationalPriceRules");

        return $this;
    }

    /**
     * Whether a shop has enabled a legacy subscription gateway to handle older subscriptions.
     */
    public function selectLegacySubscriptionGatewayEnabled(): static
    {
        $this->selectField("legacySubscriptionGatewayEnabled");

        return $this;
    }

    /**
     * Whether to show the Live View metrics in the Shopify admin. Live view is hidden from merchants that are on a trial
     * or don't have a storefront.
     */
    public function selectLiveView(): static
    {
        $this->selectField("liveView");

        return $this;
    }

    /**
     * Whether market-driven shipping is enabled for the shop.
     */
    public function selectMarketDrivenShipping(): static
    {
        $this->selectField("marketDrivenShipping");

        return $this;
    }

    /**
     * Whether a shop has access to the onboarding visual.
     *
     * @deprecated No longer supported.
     */
    public function selectOnboardingVisual(): static
    {
        $this->selectField("onboardingVisual");

        return $this;
    }

    /**
     * Whether a shop is configured to sell subscriptions with PayPal Express.
     */
    public function selectPaypalExpressSubscriptionGatewayStatus(): static
    {
        $this->selectField("paypalExpressSubscriptionGatewayStatus");

        return $this;
    }

    /**
     * Whether a shop has access to all reporting features.
     */
    public function selectReports(): static
    {
        $this->selectField("reports");

        return $this;
    }

    /**
     * Whether a shop has ever had subscription products.
     */
    public function selectSellsSubscriptions(): static
    {
        $this->selectField("sellsSubscriptions");

        return $this;
    }

    /**
     * Whether the shop has a Shopify Plus subscription.
     *
     * @deprecated Use Shop.plan.shopifyPlus instead.
     */
    public function selectShopifyPlus(): static
    {
        $this->selectField("shopifyPlus");

        return $this;
    }

    /**
     * Whether to show metrics in the Shopify admin. Metrics are hidden for new merchants until they become meaningful.
     */
    public function selectShowMetrics(): static
    {
        $this->selectField("showMetrics");

        return $this;
    }

    /**
     * Whether a shop has an online store.
     */
    public function selectStorefront(): static
    {
        $this->selectField("storefront");

        return $this;
    }

    /**
     * Whether a shop is eligible for Sub Country Markets.
     */
    public function selectSubCountryMarketsEnabled(): static
    {
        $this->selectField("subCountryMarketsEnabled");

        return $this;
    }

    /**
     * Whether a shop is eligible for Unified Markets.
     *
     * @deprecated Unified Markets is enabled for all shops. Remove checks against this field.
     */
    public function selectUnifiedMarkets(): static
    {
        $this->selectField("unifiedMarkets");

        return $this;
    }

    /**
     * Whether a shop is using Shopify Balance.
     */
    public function selectUsingShopifyBalance(): static
    {
        $this->selectField("usingShopifyBalance");

        return $this;
    }
}
