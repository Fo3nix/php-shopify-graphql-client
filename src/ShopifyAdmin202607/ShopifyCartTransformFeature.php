<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCartTransformEligibleOperations;

/**
 * Provides access to the cart transform feature configuration for the merchant's store. This wrapper object indicates whether cart transformation capabilities are enabled and what operations are available.
 *
 * For example, when checking if your app can deploy customized bundle features, you would query this object to confirm cart transforms are supported and review the eligible operations.
 *
 * The feature configuration helps apps determine compatibility before attempting to create transform functions.
 *
 * Learn more about [cart transformation](https://shopify.dev/docs/api/admin-graphql/latest/objects/CartTransform).
 */
class ShopifyCartTransformFeature
{
    protected $eligibleOperations;

    
    /**
     * The cart transform operations eligible for the shop.
     *
     * @return ShopifyCartTransformEligibleOperations
     */
    public function getEligibleOperations(): ?ShopifyCartTransformEligibleOperations
    {
        return $this->eligibleOperations;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['eligibleOperations']) && $data['eligibleOperations'] !== null) {
                $instance->eligibleOperations = ShopifyCartTransformEligibleOperations::fromArray($data['eligibleOperations']);
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
            if ($this->eligibleOperations !== null) {
                $data['eligibleOperations'] = $this->eligibleOperations->asArray();
            }
            return $data;
        }
}
