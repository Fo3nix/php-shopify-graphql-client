<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyBundlesFeature;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCartTransformFeature;

/**
 * Represents the feature set available to the shop.
 * Most fields specify whether a feature is enabled for a shop, and some fields return information
 * related to specific features.
 */
class ShopifyShopFeatures
{
    protected $avalaraAvatax;
    protected $branding;
    protected $bundles;
    protected $captcha;
    protected $captchaExternalDomains;
    protected $cartTransform;
    protected $deliveryProfiles;
    protected $dynamicRemarketing;
    protected $eligibleForSubscriptionMigration;
    protected $eligibleForSubscriptions;
    protected $giftCards;
    protected $harmonizedSystemCode;
    protected $internationalDomains;
    protected $internationalPriceOverrides;
    protected $internationalPriceRules;
    protected $legacySubscriptionGatewayEnabled;
    protected $liveView;
    protected $onboardingVisual;
    protected $paypalExpressSubscriptionGatewayStatus;
    protected $reports;
    protected $sellsSubscriptions;
    protected $shopifyPlus;
    protected $showMetrics;
    protected $storefront;
    protected $unifiedMarkets;
    protected $usingShopifyBalance;

    
    /**
     * Whether a shop has access to Avalara AvaTax.
     *
     * @return bool
     */
    public function getAvalaraAvatax(): ?bool
    {
        return $this->avalaraAvatax;
    }

    
    /**
     * The branding of the shop, which influences its look and feel in the Shopify admin.
     *
     * @return string A ShopifyShopBrandingEnumObject value
     */
    public function getBranding(): ?string
    {
        return $this->branding;
    }

    
    /**
     * Represents the Bundles feature configuration for the shop.
     *
     * @return ShopifyBundlesFeature
     */
    public function getBundles(): ?ShopifyBundlesFeature
    {
        return $this->bundles;
    }

    
    /**
     * Whether a shop's online store can have CAPTCHA protection.
     *
     * @return bool
     */
    public function getCaptcha(): ?bool
    {
        return $this->captcha;
    }

    
    /**
     * Whether a shop's online store can have CAPTCHA protection for domains not managed by Shopify.
     *
     * @return bool
     */
    public function getCaptchaExternalDomains(): ?bool
    {
        return $this->captchaExternalDomains;
    }

    
    /**
     * Represents the cart transform feature configuration for the shop.
     *
     * @return ShopifyCartTransformFeature
     */
    public function getCartTransform(): ?ShopifyCartTransformFeature
    {
        return $this->cartTransform;
    }

    
    /**
     * Whether the delivery profiles functionality is enabled for this shop.
     *
     * @return bool
     */
    public function getDeliveryProfiles(): ?bool
    {
        return $this->deliveryProfiles;
    }

    
    /**
     * Whether a shop has access to the Google Analytics dynamic remarketing feature.
     *
     * @return bool
     */
    public function getDynamicRemarketing(): ?bool
    {
        return $this->dynamicRemarketing;
    }

    
    /**
     * Whether a shop can be migrated to use Shopify subscriptions.
     *
     * @return bool
     */
    public function getEligibleForSubscriptionMigration(): ?bool
    {
        return $this->eligibleForSubscriptionMigration;
    }

    
    /**
     * Whether a shop is configured properly to sell subscriptions.
     *
     * @return bool
     */
    public function getEligibleForSubscriptions(): ?bool
    {
        return $this->eligibleForSubscriptions;
    }

    
    /**
     * Whether a shop can create gift cards.
     *
     * @return bool
     */
    public function getGiftCards(): ?bool
    {
        return $this->giftCards;
    }

    
    /**
     * Whether a shop displays Harmonized System codes on products. This is used for customs when shipping
     * internationally.
     *
     * @return bool
     */
    public function getHarmonizedSystemCode(): ?bool
    {
        return $this->harmonizedSystemCode;
    }

    
    /**
     * Whether a shop can enable international domains.
     *
     * @return bool
     */
    public function getInternationalDomains(): ?bool
    {
        return $this->internationalDomains;
    }

    
    /**
     * Whether a shop can enable international price overrides.
     *
     * @return bool
     */
    public function getInternationalPriceOverrides(): ?bool
    {
        return $this->internationalPriceOverrides;
    }

    
    /**
     * Whether a shop can enable international price rules.
     *
     * @return bool
     */
    public function getInternationalPriceRules(): ?bool
    {
        return $this->internationalPriceRules;
    }

    
    /**
     * Whether a shop has enabled a legacy subscription gateway to handle older subscriptions.
     *
     * @return bool
     */
    public function getLegacySubscriptionGatewayEnabled(): ?bool
    {
        return $this->legacySubscriptionGatewayEnabled;
    }

    
    /**
     * Whether to show the Live View metrics in the Shopify admin. Live view is hidden from merchants that are on a trial
     * or don't have a storefront.
     *
     * @return bool
     */
    public function getLiveView(): ?bool
    {
        return $this->liveView;
    }

    
    /**
     * Whether a shop has access to the onboarding visual.
     *
     * @return bool
     */
    public function getOnboardingVisual(): ?bool
    {
        return $this->onboardingVisual;
    }

    
    /**
     * Whether a shop is configured to sell subscriptions with PayPal Express.
     *
     * @return string A ShopifyPaypalExpressSubscriptionsGatewayStatusEnumObject value
     */
    public function getPaypalExpressSubscriptionGatewayStatus(): ?string
    {
        return $this->paypalExpressSubscriptionGatewayStatus;
    }

    
    /**
     * Whether a shop has access to all reporting features.
     *
     * @return bool
     */
    public function getReports(): ?bool
    {
        return $this->reports;
    }

    
    /**
     * Whether a shop has ever had subscription products.
     *
     * @return bool
     */
    public function getSellsSubscriptions(): ?bool
    {
        return $this->sellsSubscriptions;
    }

    
    /**
     * Whether the shop has a Shopify Plus subscription.
     *
     * @return bool
     */
    public function getShopifyPlus(): ?bool
    {
        return $this->shopifyPlus;
    }

    
    /**
     * Whether to show metrics in the Shopify admin. Metrics are hidden for new merchants until they become meaningful.
     *
     * @return bool
     */
    public function getShowMetrics(): ?bool
    {
        return $this->showMetrics;
    }

    
    /**
     * Whether a shop has an online store.
     *
     * @return bool
     */
    public function getStorefront(): ?bool
    {
        return $this->storefront;
    }

    
    /**
     * Whether a shop is eligible for Unified Markets.
     *
     * @return bool
     */
    public function getUnifiedMarkets(): ?bool
    {
        return $this->unifiedMarkets;
    }

    
    /**
     * Whether a shop is using Shopify Balance.
     *
     * @return bool
     */
    public function getUsingShopifyBalance(): ?bool
    {
        return $this->usingShopifyBalance;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['avalaraAvatax']) && $data['avalaraAvatax'] !== null) {
                $instance->avalaraAvatax = $data['avalaraAvatax'];
            }
            if (isset($data['branding']) && $data['branding'] !== null) {
                $instance->branding = $data['branding'];
            }
            if (isset($data['bundles']) && $data['bundles'] !== null) {
                $instance->bundles = ShopifyBundlesFeature::fromArray($data['bundles']);
            }
            if (isset($data['captcha']) && $data['captcha'] !== null) {
                $instance->captcha = $data['captcha'];
            }
            if (isset($data['captchaExternalDomains']) && $data['captchaExternalDomains'] !== null) {
                $instance->captchaExternalDomains = $data['captchaExternalDomains'];
            }
            if (isset($data['cartTransform']) && $data['cartTransform'] !== null) {
                $instance->cartTransform = ShopifyCartTransformFeature::fromArray($data['cartTransform']);
            }
            if (isset($data['deliveryProfiles']) && $data['deliveryProfiles'] !== null) {
                $instance->deliveryProfiles = $data['deliveryProfiles'];
            }
            if (isset($data['dynamicRemarketing']) && $data['dynamicRemarketing'] !== null) {
                $instance->dynamicRemarketing = $data['dynamicRemarketing'];
            }
            if (isset($data['eligibleForSubscriptionMigration']) && $data['eligibleForSubscriptionMigration'] !== null) {
                $instance->eligibleForSubscriptionMigration = $data['eligibleForSubscriptionMigration'];
            }
            if (isset($data['eligibleForSubscriptions']) && $data['eligibleForSubscriptions'] !== null) {
                $instance->eligibleForSubscriptions = $data['eligibleForSubscriptions'];
            }
            if (isset($data['giftCards']) && $data['giftCards'] !== null) {
                $instance->giftCards = $data['giftCards'];
            }
            if (isset($data['harmonizedSystemCode']) && $data['harmonizedSystemCode'] !== null) {
                $instance->harmonizedSystemCode = $data['harmonizedSystemCode'];
            }
            if (isset($data['internationalDomains']) && $data['internationalDomains'] !== null) {
                $instance->internationalDomains = $data['internationalDomains'];
            }
            if (isset($data['internationalPriceOverrides']) && $data['internationalPriceOverrides'] !== null) {
                $instance->internationalPriceOverrides = $data['internationalPriceOverrides'];
            }
            if (isset($data['internationalPriceRules']) && $data['internationalPriceRules'] !== null) {
                $instance->internationalPriceRules = $data['internationalPriceRules'];
            }
            if (isset($data['legacySubscriptionGatewayEnabled']) && $data['legacySubscriptionGatewayEnabled'] !== null) {
                $instance->legacySubscriptionGatewayEnabled = $data['legacySubscriptionGatewayEnabled'];
            }
            if (isset($data['liveView']) && $data['liveView'] !== null) {
                $instance->liveView = $data['liveView'];
            }
            if (isset($data['onboardingVisual']) && $data['onboardingVisual'] !== null) {
                $instance->onboardingVisual = $data['onboardingVisual'];
            }
            if (isset($data['paypalExpressSubscriptionGatewayStatus']) && $data['paypalExpressSubscriptionGatewayStatus'] !== null) {
                $instance->paypalExpressSubscriptionGatewayStatus = $data['paypalExpressSubscriptionGatewayStatus'];
            }
            if (isset($data['reports']) && $data['reports'] !== null) {
                $instance->reports = $data['reports'];
            }
            if (isset($data['sellsSubscriptions']) && $data['sellsSubscriptions'] !== null) {
                $instance->sellsSubscriptions = $data['sellsSubscriptions'];
            }
            if (isset($data['shopifyPlus']) && $data['shopifyPlus'] !== null) {
                $instance->shopifyPlus = $data['shopifyPlus'];
            }
            if (isset($data['showMetrics']) && $data['showMetrics'] !== null) {
                $instance->showMetrics = $data['showMetrics'];
            }
            if (isset($data['storefront']) && $data['storefront'] !== null) {
                $instance->storefront = $data['storefront'];
            }
            if (isset($data['unifiedMarkets']) && $data['unifiedMarkets'] !== null) {
                $instance->unifiedMarkets = $data['unifiedMarkets'];
            }
            if (isset($data['usingShopifyBalance']) && $data['usingShopifyBalance'] !== null) {
                $instance->usingShopifyBalance = $data['usingShopifyBalance'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->avalaraAvatax !== null) {
                $data['avalaraAvatax'] = $this->avalaraAvatax;
            }
            if ($this->branding !== null) {
                $data['branding'] = $this->branding;
            }
            if ($this->bundles !== null) {
                $data['bundles'] = $this->bundles->asArray();
            }
            if ($this->captcha !== null) {
                $data['captcha'] = $this->captcha;
            }
            if ($this->captchaExternalDomains !== null) {
                $data['captchaExternalDomains'] = $this->captchaExternalDomains;
            }
            if ($this->cartTransform !== null) {
                $data['cartTransform'] = $this->cartTransform->asArray();
            }
            if ($this->deliveryProfiles !== null) {
                $data['deliveryProfiles'] = $this->deliveryProfiles;
            }
            if ($this->dynamicRemarketing !== null) {
                $data['dynamicRemarketing'] = $this->dynamicRemarketing;
            }
            if ($this->eligibleForSubscriptionMigration !== null) {
                $data['eligibleForSubscriptionMigration'] = $this->eligibleForSubscriptionMigration;
            }
            if ($this->eligibleForSubscriptions !== null) {
                $data['eligibleForSubscriptions'] = $this->eligibleForSubscriptions;
            }
            if ($this->giftCards !== null) {
                $data['giftCards'] = $this->giftCards;
            }
            if ($this->harmonizedSystemCode !== null) {
                $data['harmonizedSystemCode'] = $this->harmonizedSystemCode;
            }
            if ($this->internationalDomains !== null) {
                $data['internationalDomains'] = $this->internationalDomains;
            }
            if ($this->internationalPriceOverrides !== null) {
                $data['internationalPriceOverrides'] = $this->internationalPriceOverrides;
            }
            if ($this->internationalPriceRules !== null) {
                $data['internationalPriceRules'] = $this->internationalPriceRules;
            }
            if ($this->legacySubscriptionGatewayEnabled !== null) {
                $data['legacySubscriptionGatewayEnabled'] = $this->legacySubscriptionGatewayEnabled;
            }
            if ($this->liveView !== null) {
                $data['liveView'] = $this->liveView;
            }
            if ($this->onboardingVisual !== null) {
                $data['onboardingVisual'] = $this->onboardingVisual;
            }
            if ($this->paypalExpressSubscriptionGatewayStatus !== null) {
                $data['paypalExpressSubscriptionGatewayStatus'] = $this->paypalExpressSubscriptionGatewayStatus;
            }
            if ($this->reports !== null) {
                $data['reports'] = $this->reports;
            }
            if ($this->sellsSubscriptions !== null) {
                $data['sellsSubscriptions'] = $this->sellsSubscriptions;
            }
            if ($this->shopifyPlus !== null) {
                $data['shopifyPlus'] = $this->shopifyPlus;
            }
            if ($this->showMetrics !== null) {
                $data['showMetrics'] = $this->showMetrics;
            }
            if ($this->storefront !== null) {
                $data['storefront'] = $this->storefront;
            }
            if ($this->unifiedMarkets !== null) {
                $data['unifiedMarkets'] = $this->unifiedMarkets;
            }
            if ($this->usingShopifyBalance !== null) {
                $data['usingShopifyBalance'] = $this->usingShopifyBalance;
            }
            return $data;
        }
}
