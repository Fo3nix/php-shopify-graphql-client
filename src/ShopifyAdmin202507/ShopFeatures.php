<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\BundlesFeature;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CartTransformFeature;

class ShopFeatures
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
     * @return bool
     */
    public function getAvalaraAvatax()
    {
        return $this->avalaraAvatax;
    }

    
    /**
     * @return ShopBrandingEnumObject
     */
    public function getBranding()
    {
        return $this->branding;
    }

    
    /**
     * @return BundlesFeature
     */
    public function getBundles()
    {
        return $this->bundles;
    }

    
    /**
     * @return bool
     */
    public function getCaptcha()
    {
        return $this->captcha;
    }

    
    /**
     * @return bool
     */
    public function getCaptchaExternalDomains()
    {
        return $this->captchaExternalDomains;
    }

    
    /**
     * @return CartTransformFeature
     */
    public function getCartTransform()
    {
        return $this->cartTransform;
    }

    
    /**
     * @return bool
     */
    public function getDeliveryProfiles()
    {
        return $this->deliveryProfiles;
    }

    
    /**
     * @return bool
     */
    public function getDynamicRemarketing()
    {
        return $this->dynamicRemarketing;
    }

    
    /**
     * @return bool
     */
    public function getEligibleForSubscriptionMigration()
    {
        return $this->eligibleForSubscriptionMigration;
    }

    
    /**
     * @return bool
     */
    public function getEligibleForSubscriptions()
    {
        return $this->eligibleForSubscriptions;
    }

    
    /**
     * @return bool
     */
    public function getGiftCards()
    {
        return $this->giftCards;
    }

    
    /**
     * @return bool
     */
    public function getHarmonizedSystemCode()
    {
        return $this->harmonizedSystemCode;
    }

    
    /**
     * @return bool
     */
    public function getInternationalDomains()
    {
        return $this->internationalDomains;
    }

    
    /**
     * @return bool
     */
    public function getInternationalPriceOverrides()
    {
        return $this->internationalPriceOverrides;
    }

    
    /**
     * @return bool
     */
    public function getInternationalPriceRules()
    {
        return $this->internationalPriceRules;
    }

    
    /**
     * @return bool
     */
    public function getLegacySubscriptionGatewayEnabled()
    {
        return $this->legacySubscriptionGatewayEnabled;
    }

    
    /**
     * @return bool
     */
    public function getLiveView()
    {
        return $this->liveView;
    }

    
    /**
     * @return bool
     */
    public function getOnboardingVisual()
    {
        return $this->onboardingVisual;
    }

    
    /**
     * @return PaypalExpressSubscriptionsGatewayStatusEnumObject
     */
    public function getPaypalExpressSubscriptionGatewayStatus()
    {
        return $this->paypalExpressSubscriptionGatewayStatus;
    }

    
    /**
     * @return bool
     */
    public function getReports()
    {
        return $this->reports;
    }

    
    /**
     * @return bool
     */
    public function getSellsSubscriptions()
    {
        return $this->sellsSubscriptions;
    }

    
    /**
     * @return bool
     */
    public function getShopifyPlus()
    {
        return $this->shopifyPlus;
    }

    
    /**
     * @return bool
     */
    public function getShowMetrics()
    {
        return $this->showMetrics;
    }

    
    /**
     * @return bool
     */
    public function getStorefront()
    {
        return $this->storefront;
    }

    
    /**
     * @return bool
     */
    public function getUnifiedMarkets()
    {
        return $this->unifiedMarkets;
    }

    
    /**
     * @return bool
     */
    public function getUsingShopifyBalance()
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
                $instance->bundles = BundlesFeature::fromArray($data['bundles']);
            }
            if (isset($data['captcha']) && $data['captcha'] !== null) {
                $instance->captcha = $data['captcha'];
            }
            if (isset($data['captchaExternalDomains']) && $data['captchaExternalDomains'] !== null) {
                $instance->captchaExternalDomains = $data['captchaExternalDomains'];
            }
            if (isset($data['cartTransform']) && $data['cartTransform'] !== null) {
                $instance->cartTransform = CartTransformFeature::fromArray($data['cartTransform']);
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
