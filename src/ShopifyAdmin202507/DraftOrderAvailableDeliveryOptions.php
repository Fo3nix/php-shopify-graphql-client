<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DraftOrderShippingRate;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PickupInStoreLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PageInfo;

class DraftOrderAvailableDeliveryOptions
{
    protected $availableLocalDeliveryRates;
    protected $availableLocalPickupOptions;
    protected $availableShippingRates;
    protected $pageInfo;

    
    /**
     * @return DraftOrderShippingRate[]
     */
    public function getAvailableLocalDeliveryRates()
    {
        return $this->availableLocalDeliveryRates;
    }

    
    /**
     * @return PickupInStoreLocation[]
     */
    public function getAvailableLocalPickupOptions()
    {
        return $this->availableLocalPickupOptions;
    }

    
    /**
     * @return DraftOrderShippingRate[]
     */
    public function getAvailableShippingRates()
    {
        return $this->availableShippingRates;
    }

    
    /**
     * @return PageInfo
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
                $instance->availableLocalDeliveryRates = array_map(function($item) { return DraftOrderShippingRate::fromArray($item); }, $data['availableLocalDeliveryRates']);
            }
            if (isset($data['availableLocalPickupOptions']) && $data['availableLocalPickupOptions'] !== null) {
                $instance->availableLocalPickupOptions = array_map(function($item) { return PickupInStoreLocation::fromArray($item); }, $data['availableLocalPickupOptions']);
            }
            if (isset($data['availableShippingRates']) && $data['availableShippingRates'] !== null) {
                $instance->availableShippingRates = array_map(function($item) { return DraftOrderShippingRate::fromArray($item); }, $data['availableShippingRates']);
            }
            if (isset($data['pageInfo']) && $data['pageInfo'] !== null) {
                $instance->pageInfo = PageInfo::fromArray($data['pageInfo']);
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
