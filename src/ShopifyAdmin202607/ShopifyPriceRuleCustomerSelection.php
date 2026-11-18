<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCustomerConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySegment;

/**
 * A selection of customers for whom the price rule applies.
 */
class ShopifyPriceRuleCustomerSelection
{
    protected $customers;
    protected $forAllCustomers;
    protected $segments;

    
    /**
     * List of customers to whom the price rule applies.
     *
     * @return ShopifyCustomerConnection
     */
    public function getCustomers(): ?ShopifyCustomerConnection
    {
        return $this->customers;
    }

    
    /**
     * Whether the price rule applies to all customers.
     *
     * @return bool
     */
    public function getForAllCustomers(): ?bool
    {
        return $this->forAllCustomers;
    }

    
    /**
     * A list of customer segments that contain the customers who can use the price rule.
     *
     * @return ShopifySegment[]
     */
    public function getSegments(): ?array
    {
        return $this->segments;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customers']) && $data['customers'] !== null) {
                $instance->customers = ShopifyCustomerConnection::fromArray($data['customers']);
            }
            if (isset($data['forAllCustomers']) && $data['forAllCustomers'] !== null) {
                $instance->forAllCustomers = $data['forAllCustomers'];
            }
            if (isset($data['segments']) && $data['segments'] !== null) {
                $instance->segments = array_map(function($item) { return ShopifySegment::fromArray($item); }, $data['segments']);
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
                $data['customers'] = $this->customers->asArray();
            }
            if ($this->forAllCustomers !== null) {
                $data['forAllCustomers'] = $this->forAllCustomers;
            }
            if ($this->segments !== null) {
                $data['segments'] = array_map(function($item) { return $item->asArray(); }, $this->segments);
            }
            return $data;
        }
}
