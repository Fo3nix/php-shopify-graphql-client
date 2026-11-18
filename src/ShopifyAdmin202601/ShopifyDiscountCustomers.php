<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomer;

/**
 * Defines customer targeting for discounts through specific individual customers. This object allows merchants to create exclusive discounts that are only available to explicitly selected customers.
 *
 * For example, a VIP customer appreciation discount might target specific high-value customers by individually selecting them, or a beta program discount could be offered to selected early adopters.
 *
 * Use `DiscountCustomers` to:
 * - Target specific individual customers for exclusive promotions
 * - Create personalized discount experiences for selected customers
 * - Offer special discounts to VIP or loyal customers
 * - Provide exclusive access to promotions for specific individuals
 *
 * This targeting method requires you to add each customer who should be eligible for the discount. For broader targeting based on customer attributes or segments, use [`DiscountCustomerSegments`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCustomerSegments) instead.
 *
 * Learn more about creating customer-specific discounts using [`discountCodeBasicCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountCodeBasicCreate) and [`discountCodeBasicUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountCodeBasicUpdate).
 */
class ShopifyDiscountCustomers
{
    protected $customers;

    
    /**
     * The list of individual customers eligible for the discount.
     *
     * @return ShopifyCustomer[]
     */
    public function getCustomers(): ?array
    {
        return $this->customers;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customers']) && $data['customers'] !== null) {
                $instance->customers = array_map(function($item) { return ShopifyCustomer::fromArray($item); }, $data['customers']);
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
            if ($this->customers !== null) {
                $data['customers'] = array_map(function($item) { return $item->asArray(); }, $this->customers);
            }
            return $data;
        }
}
