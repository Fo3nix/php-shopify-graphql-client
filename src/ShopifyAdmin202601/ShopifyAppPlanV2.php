<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAppPricingDetailsHydrator;

/**
 * Contains the pricing details for the app plan that a merchant has subscribed to within their current billing arrangement.
 *
 * This simplified object focuses on the essential pricing information merchants need to understand their current subscription costs and billing structure.
 *
 * Details about subscription management and pricing strategies are available in the [app billing documentation](https://shopify.dev/docs/apps/launch/billing).
 */
class ShopifyAppPlanV2
{
    protected $pricingDetails;

    
    /**
     * The plan billed to a shop on a recurring basis.
     *
     * @return ShopifyAppRecurringPricing|ShopifyAppUsagePricing
     */
    public function getPricingDetails(): ShopifyAppRecurringPricing|ShopifyAppUsagePricing|null
    {
        return $this->pricingDetails;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['pricingDetails']) && $data['pricingDetails'] !== null) {
                $instance->pricingDetails = ShopifyAppPricingDetailsHydrator::fromArray($data['pricingDetails']);
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
            if ($this->pricingDetails !== null) {
                $data['pricingDetails'] = ShopifyAppPricingDetailsHydrator::toArray($this->pricingDetails);
            }
            return $data;
        }
}
