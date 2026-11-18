<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * Specifies the minimum item quantity required for discount eligibility, helping merchants create volume-based promotions that encourage larger purchases. This threshold applies to qualifying items in the customer's cart.
 *
 * For example, a "Buy 3, Get 10% Off" promotion would set the minimum quantity to 3 items.
 *
 * Learn more about [discount requirements](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountApplication).
 */
class ShopifyDiscountMinimumQuantity
{
    protected $greaterThanOrEqualToQuantity;

    
    /**
     * The minimum quantity of items that's required for the discount to be applied.
     *
     * @return string
     */
    public function getGreaterThanOrEqualToQuantity(): mixed
    {
        return $this->greaterThanOrEqualToQuantity;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['greaterThanOrEqualToQuantity']) && $data['greaterThanOrEqualToQuantity'] !== null) {
                $instance->greaterThanOrEqualToQuantity = $data['greaterThanOrEqualToQuantity'];
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
            if ($this->greaterThanOrEqualToQuantity !== null) {
                $data['greaterThanOrEqualToQuantity'] = $this->greaterThanOrEqualToQuantity;
            }
            return $data;
        }
}
