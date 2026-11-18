<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDraftOrderShippingRate;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPickupInStoreLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPageInfo;

/**
 * The available delivery options for a draft order.
 */
class ShopifyDraftOrderAvailableDeliveryOptions
{
    protected $availableLocalDeliveryRates;
    protected $availableLocalPickupOptions;
    protected $availableShippingRates;
    protected $pageInfo;

    
    /**
     * The available local delivery rates for the draft order. Requires a customer with a valid shipping address and at least one line item.
     *
     * @return ShopifyDraftOrderShippingRate[]
     */
    public function getAvailableLocalDeliveryRates(): ?array
    {
        return $this->availableLocalDeliveryRates;
    }

    
    /**
     * The available local pickup options for the draft order. Requires at least one line item.
     *
     * @return ShopifyPickupInStoreLocation[]
     */
    public function getAvailableLocalPickupOptions(): ?array
    {
        return $this->availableLocalPickupOptions;
    }

    
    /**
     * The available shipping rates for the draft order. Requires a customer with a valid shipping address and at least one line item.
     *
     * @return ShopifyDraftOrderShippingRate[]
     */
    public function getAvailableShippingRates(): ?array
    {
        return $this->availableShippingRates;
    }

    
    /**
     * Returns information about pagination of local pickup options.
     *
     * @return ShopifyPageInfo
     */
    public function getPageInfo(): ?ShopifyPageInfo
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
