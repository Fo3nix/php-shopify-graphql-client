<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopFeaturesQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopFeatures";

    public function selectAvalaraAvatax()
    {
        $this->selectField("avalaraAvatax");

        return $this;
    }

    public function selectBranding()
    {
        $this->selectField("branding");

        return $this;
    }

    public function selectBundles(ShopFeaturesBundlesArgumentsObject $argsObject = null)
    {
        $object = new BundlesFeatureQueryObject("bundles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCaptcha()
    {
        $this->selectField("captcha");

        return $this;
    }

    /**
     * @deprecated No longer required for external domains
     */
    public function selectCaptchaExternalDomains()
    {
        $this->selectField("captchaExternalDomains");

        return $this;
    }

    public function selectCartTransform(ShopFeaturesCartTransformArgumentsObject $argsObject = null)
    {
        $object = new CartTransformFeatureQueryObject("cartTransform");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Delivery profiles are now 100% enabled across Shopify.
     */
    public function selectDeliveryProfiles()
    {
        $this->selectField("deliveryProfiles");

        return $this;
    }

    public function selectDynamicRemarketing()
    {
        $this->selectField("dynamicRemarketing");

        return $this;
    }

    public function selectEligibleForSubscriptionMigration()
    {
        $this->selectField("eligibleForSubscriptionMigration");

        return $this;
    }

    public function selectEligibleForSubscriptions()
    {
        $this->selectField("eligibleForSubscriptions");

        return $this;
    }

    public function selectGiftCards()
    {
        $this->selectField("giftCards");

        return $this;
    }

    public function selectHarmonizedSystemCode()
    {
        $this->selectField("harmonizedSystemCode");

        return $this;
    }

    /**
     * @deprecated All shops have international domains through Shopify Markets.
     */
    public function selectInternationalDomains()
    {
        $this->selectField("internationalDomains");

        return $this;
    }

    /**
     * @deprecated Use the `markets` field on `EntitlementsType`.
    Each market entitlement has a `catalogs` field that indicates
    whether the shop's markets have access to catalogs and price overrides.

     */
    public function selectInternationalPriceOverrides()
    {
        $this->selectField("internationalPriceOverrides");

        return $this;
    }

    /**
     * @deprecated Use the `markets` field on `EntitlementsType`.
    Each market entitlement has a `catalogs` field that indicates
    whether the shop's markets have access to catalogs and price overrides.

     */
    public function selectInternationalPriceRules()
    {
        $this->selectField("internationalPriceRules");

        return $this;
    }

    public function selectLegacySubscriptionGatewayEnabled()
    {
        $this->selectField("legacySubscriptionGatewayEnabled");

        return $this;
    }

    public function selectLiveView()
    {
        $this->selectField("liveView");

        return $this;
    }

    /**
     * @deprecated No longer supported.
     */
    public function selectOnboardingVisual()
    {
        $this->selectField("onboardingVisual");

        return $this;
    }

    public function selectPaypalExpressSubscriptionGatewayStatus()
    {
        $this->selectField("paypalExpressSubscriptionGatewayStatus");

        return $this;
    }

    public function selectReports()
    {
        $this->selectField("reports");

        return $this;
    }

    public function selectSellsSubscriptions()
    {
        $this->selectField("sellsSubscriptions");

        return $this;
    }

    /**
     * @deprecated Use Shop.plan.shopifyPlus instead.
     */
    public function selectShopifyPlus()
    {
        $this->selectField("shopifyPlus");

        return $this;
    }

    public function selectShowMetrics()
    {
        $this->selectField("showMetrics");

        return $this;
    }

    public function selectStorefront()
    {
        $this->selectField("storefront");

        return $this;
    }

    public function selectUnifiedMarkets()
    {
        $this->selectField("unifiedMarkets");

        return $this;
    }

    public function selectUsingShopifyBalance()
    {
        $this->selectField("usingShopifyBalance");

        return $this;
    }
}
