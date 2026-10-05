<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldCapabilityAdminFilterable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldCapabilityAnalyticsQueryable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldCapabilityCartToOrderCopyable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldCapabilitySmartCollectionCondition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldCapabilityUniqueValues;

class ShopifyMetafieldCapabilities
{
    protected $adminFilterable;
    protected $analyticsQueryable;
    protected $cartToOrderCopyable;
    protected $smartCollectionCondition;
    protected $uniqueValues;

    
    /**
     * @return ShopifyMetafieldCapabilityAdminFilterable
     */
    public function getAdminFilterable()
    {
        return $this->adminFilterable;
    }

    
    /**
     * @return ShopifyMetafieldCapabilityAnalyticsQueryable
     */
    public function getAnalyticsQueryable()
    {
        return $this->analyticsQueryable;
    }

    
    /**
     * @return ShopifyMetafieldCapabilityCartToOrderCopyable
     */
    public function getCartToOrderCopyable()
    {
        return $this->cartToOrderCopyable;
    }

    
    /**
     * @return ShopifyMetafieldCapabilitySmartCollectionCondition
     */
    public function getSmartCollectionCondition()
    {
        return $this->smartCollectionCondition;
    }

    
    /**
     * @return ShopifyMetafieldCapabilityUniqueValues
     */
    public function getUniqueValues()
    {
        return $this->uniqueValues;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['adminFilterable']) && $data['adminFilterable'] !== null) {
                $instance->adminFilterable = ShopifyMetafieldCapabilityAdminFilterable::fromArray($data['adminFilterable']);
            }
            if (isset($data['analyticsQueryable']) && $data['analyticsQueryable'] !== null) {
                $instance->analyticsQueryable = ShopifyMetafieldCapabilityAnalyticsQueryable::fromArray($data['analyticsQueryable']);
            }
            if (isset($data['cartToOrderCopyable']) && $data['cartToOrderCopyable'] !== null) {
                $instance->cartToOrderCopyable = ShopifyMetafieldCapabilityCartToOrderCopyable::fromArray($data['cartToOrderCopyable']);
            }
            if (isset($data['smartCollectionCondition']) && $data['smartCollectionCondition'] !== null) {
                $instance->smartCollectionCondition = ShopifyMetafieldCapabilitySmartCollectionCondition::fromArray($data['smartCollectionCondition']);
            }
            if (isset($data['uniqueValues']) && $data['uniqueValues'] !== null) {
                $instance->uniqueValues = ShopifyMetafieldCapabilityUniqueValues::fromArray($data['uniqueValues']);
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
            if ($this->adminFilterable !== null) {
                $data['adminFilterable'] = $this->adminFilterable->asArray();
            }
            if ($this->analyticsQueryable !== null) {
                $data['analyticsQueryable'] = $this->analyticsQueryable->asArray();
            }
            if ($this->cartToOrderCopyable !== null) {
                $data['cartToOrderCopyable'] = $this->cartToOrderCopyable->asArray();
            }
            if ($this->smartCollectionCondition !== null) {
                $data['smartCollectionCondition'] = $this->smartCollectionCondition->asArray();
            }
            if ($this->uniqueValues !== null) {
                $data['uniqueValues'] = $this->uniqueValues->asArray();
            }
            return $data;
        }
}
