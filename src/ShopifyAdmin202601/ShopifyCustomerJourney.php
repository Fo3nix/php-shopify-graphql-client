<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomerVisit;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomerMomentHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomerMoment;

/**
 * Tracks a customer's path to purchase through their online store visits. The journey captures key moments like shop sessions that led to the order, helping merchants understand customer behavior and marketing attribution within a 30-day window. Includes the first and last sessions before an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order), the time between initial visit and conversion, and the customer's order position in their purchase history.
 */
class ShopifyCustomerJourney
{
    protected $customerOrderIndex;
    protected $daysToConversion;
    protected $firstVisit;
    protected $lastVisit;
    protected $moments;

    
    /**
     * The position of the current order within the customer's order history.
     *
     * @return int
     */
    public function getCustomerOrderIndex(): ?int
    {
        return $this->customerOrderIndex;
    }

    
    /**
     * The amount of days between first session and order creation date. First session represents first session since the last order, or first session within the 30 day attribution window, if more than 30 days has passed since the last order.
     *
     * @return int
     */
    public function getDaysToConversion(): ?int
    {
        return $this->daysToConversion;
    }

    
    /**
     * The customer's first session going into the shop.
     *
     * @return ShopifyCustomerVisit
     */
    public function getFirstVisit(): ?ShopifyCustomerVisit
    {
        return $this->firstVisit;
    }

    
    /**
     * The last session before an order is made.
     *
     * @return ShopifyCustomerVisit
     */
    public function getLastVisit(): ?ShopifyCustomerVisit
    {
        return $this->lastVisit;
    }

    
    /**
     * Events preceding a customer order, such as shop sessions.
     *
     * @return ShopifyCustomerMoment[]
     */
    public function getMoments(): ?array
    {
        return $this->moments;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customerOrderIndex']) && $data['customerOrderIndex'] !== null) {
                $instance->customerOrderIndex = $data['customerOrderIndex'];
            }
            if (isset($data['daysToConversion']) && $data['daysToConversion'] !== null) {
                $instance->daysToConversion = $data['daysToConversion'];
            }
            if (isset($data['firstVisit']) && $data['firstVisit'] !== null) {
                $instance->firstVisit = ShopifyCustomerVisit::fromArray($data['firstVisit']);
            }
            if (isset($data['lastVisit']) && $data['lastVisit'] !== null) {
                $instance->lastVisit = ShopifyCustomerVisit::fromArray($data['lastVisit']);
            }
            if (isset($data['moments']) && $data['moments'] !== null) {
                $instance->moments = array_map(function($item) { return ShopifyCustomerMomentHydrator::fromArray($item); }, $data['moments']);
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
            if ($this->customerOrderIndex !== null) {
                $data['customerOrderIndex'] = $this->customerOrderIndex;
            }
            if ($this->daysToConversion !== null) {
                $data['daysToConversion'] = $this->daysToConversion;
            }
            if ($this->firstVisit !== null) {
                $data['firstVisit'] = $this->firstVisit->asArray();
            }
            if ($this->lastVisit !== null) {
                $data['lastVisit'] = $this->lastVisit->asArray();
            }
            if ($this->moments !== null) {
                $data['moments'] = array_map(function($item) { return ShopifyCustomerMomentHydrator::toArray($item); }, $this->moments);
            }
            return $data;
        }
}
