<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDraftOrderShippingRate;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPickupInStoreLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPageInfo;

class ShopifyDraftOrderAvailableDeliveryOptions
{
    protected $availableLocalDeliveryRates;
    protected $availableLocalPickupOptions;
    protected $availableShippingRates;
    protected $pageInfo;

    
    /**
     * @return ShopifyDraftOrderShippingRate[]
     */
    public function getAvailableLocalDeliveryRates()
    {
        return $this->availableLocalDeliveryRates;
    }

    
    /**
     * @return ShopifyPickupInStoreLocation[]
     */
    public function getAvailableLocalPickupOptions()
    {
        return $this->availableLocalPickupOptions;
    }

    
    /**
     * @return ShopifyDraftOrderShippingRate[]
     */
    public function getAvailableShippingRates()
    {
        return $this->availableShippingRates;
    }

    
    /**
     * @return ShopifyPageInfo
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['availableLocalDeliveryRates']) && $data['availableLocalDeliveryRates'] !== null) {
                $instance->availableLocalDeliveryRates = array_map(function($item) { return ShopifyDraftOrderShippingRate::fromArray($item); }, $data['availableLocalDeliveryRates']);
            }
            if (isset($data['availableLocalPickupOptions']) && $data['availableLocalPickupOptions'] !== null) {
                $instance->availableLocalPickupOptions = array_map(function($item) { return ShopifyPickupInStoreLocation::fromArray($item); }, $data['availableLocalPickupOptions']);
            }
            if (isset($data['availableShippingRates']) && $data['availableShippingRates'] !== null) {
                $instance->availableShippingRates = array_map(function($item) { return ShopifyDraftOrderShippingRate::fromArray($item); }, $data['availableShippingRates']);
            }
            if (isset($data['pageInfo']) && $data['pageInfo'] !== null) {
                $instance->pageInfo = ShopifyPageInfo::fromArray($data['pageInfo']);
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
            if ($this->availableLocalDeliveryRates !== null) {
                $data['availableLocalDeliveryRates'] = array_map(function($item) { return $item->asArray(); }, $this->availableLocalDeliveryRates);
            }
            if ($this->availableLocalPickupOptions !== null) {
                $data['availableLocalPickupOptions'] = array_map(function($item) { return $item->asArray(); }, $this->availableLocalPickupOptions);
            }
            if ($this->availableShippingRates !== null) {
                $data['availableShippingRates'] = array_map(function($item) { return $item->asArray(); }, $this->availableShippingRates);
            }
            if ($this->pageInfo !== null) {
                $data['pageInfo'] = $this->pageInfo->asArray();
            }
            return $data;
        }
}
