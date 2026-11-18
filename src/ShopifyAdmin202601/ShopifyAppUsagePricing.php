<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;

/**
 * Defines usage-based pricing terms for app subscriptions where merchants pay based on their actual consumption of app features or services. This pricing model provides flexibility for merchants who want to pay only for what they use rather than fixed monthly fees.
 *
 * For example, an email marketing app might charge variable pricing per email sent, with a monthly cap of variable pricing, allowing small merchants to pay minimal amounts while protecting larger merchants from excessive charges.
 *
 * Use the `AppUsagePricing` object to:
 * - View consumption-based billing for variable app usage
 * - See spending caps that protect merchants from unexpected charges
 *
 * The balance and capped amount fields provide apps with data about current usage costs and remaining budget within the billing period, which apps can present to merchants to promote transparency in variable pricing.
 *
 * For implementation guidance, see the [usage billing documentation](https://shopify.dev/docs/apps/launch/billing/subscription-billing/create-usage-based-subscriptions).
 */
class ShopifyAppUsagePricing
{
    protected $balanceUsed;
    protected $cappedAmount;
    protected $interval;
    protected $terms;

    
    /**
     * The total usage records for interval.
     *
     * @return ShopifyMoneyV2
     */
    public function getBalanceUsed(): ?ShopifyMoneyV2
    {
        return $this->balanceUsed;
    }

    
    /**
     * The capped amount prevents the merchant from being charged for any usage over that amount during a billing period.
     * This prevents billing from exceeding a maximum threshold over the duration of the billing period.
     * For the merchant to continue using the app after exceeding a capped amount, they would need to agree to a new usage charge.
     *
     * @return ShopifyMoneyV2
     */
    public function getCappedAmount(): ?ShopifyMoneyV2
    {
        return $this->cappedAmount;
    }

    
    /**
     * The frequency with which the app usage records are billed.
     *
     * @return string A ShopifyAppPricingIntervalEnumObject value
     */
    public function getInterval(): ?string
    {
        return $this->interval;
    }

    
    /**
     * The terms and conditions for app usage pricing.
     * Must be present in order to create usage charges.
     * The terms are presented to the merchant when they approve an app's usage charges.
     *
     * @return string
     */
    public function getTerms(): ?string
    {
        return $this->terms;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['balanceUsed']) && $data['balanceUsed'] !== null) {
                $instance->balanceUsed = ShopifyMoneyV2::fromArray($data['balanceUsed']);
            }
            if (isset($data['cappedAmount']) && $data['cappedAmount'] !== null) {
                $instance->cappedAmount = ShopifyMoneyV2::fromArray($data['cappedAmount']);
            }
            if (isset($data['interval']) && $data['interval'] !== null) {
                $instance->interval = $data['interval'];
            }
            if (isset($data['terms']) && $data['terms'] !== null) {
                $instance->terms = $data['terms'];
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
            if ($this->balanceUsed !== null) {
                $data['balanceUsed'] = $this->balanceUsed->asArray();
            }
            if ($this->cappedAmount !== null) {
                $data['cappedAmount'] = $this->cappedAmount->asArray();
            }
            if ($this->interval !== null) {
                $data['interval'] = $this->interval;
            }
            if ($this->terms !== null) {
                $data['terms'] = $this->terms;
            }
            return $data;
        }
}
