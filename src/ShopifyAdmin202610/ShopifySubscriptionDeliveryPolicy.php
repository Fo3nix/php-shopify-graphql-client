<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySellingPlanAnchor;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionContractCalculationMultipleFulfillmentConfig;

class ShopifySubscriptionDeliveryPolicy
{
    protected $anchors;
    protected $interval;
    protected $intervalCount;
    protected $multiFulfillment;

    
    /**
     * @return ShopifySellingPlanAnchor[]
     */
    public function getAnchors()
    {
        return $this->anchors;
    }

    
    /**
     * @return ShopifySellingPlanIntervalEnumObject
     */
    public function getInterval()
    {
        return $this->interval;
    }

    
    /**
     * @return int
     */
    public function getIntervalCount()
    {
        return $this->intervalCount;
    }

    
    /**
     * @return ShopifySubscriptionContractCalculationMultipleFulfillmentConfig
     */
    public function getMultiFulfillment()
    {
        return $this->multiFulfillment;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['anchors']) && $data['anchors'] !== null) {
                $instance->anchors = array_map(function($item) { return ShopifySellingPlanAnchor::fromArray($item); }, $data['anchors']);
            }
            if (isset($data['interval']) && $data['interval'] !== null) {
                $instance->interval = $data['interval'];
            }
            if (isset($data['intervalCount']) && $data['intervalCount'] !== null) {
                $instance->intervalCount = $data['intervalCount'];
            }
            if (isset($data['multiFulfillment']) && $data['multiFulfillment'] !== null) {
                $instance->multiFulfillment = ShopifySubscriptionContractCalculationMultipleFulfillmentConfig::fromArray($data['multiFulfillment']);
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
            if ($this->anchors !== null) {
                $data['anchors'] = array_map(function($item) { return $item->asArray(); }, $this->anchors);
            }
            if ($this->interval !== null) {
                $data['interval'] = $this->interval;
            }
            if ($this->intervalCount !== null) {
                $data['intervalCount'] = $this->intervalCount;
            }
            if ($this->multiFulfillment !== null) {
                $data['multiFulfillment'] = $this->multiFulfillment->asArray();
            }
            return $data;
        }
}
