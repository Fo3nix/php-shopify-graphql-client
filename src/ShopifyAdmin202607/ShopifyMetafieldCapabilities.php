<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldCapabilityAdminFilterable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldCapabilityAnalyticsQueryable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldCapabilityCartToOrderCopyable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldCapabilitySmartCollectionCondition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldCapabilityUniqueValues;

/**
 * Provides the capabilities of a metafield definition.
 */
class ShopifyMetafieldCapabilities
{
    protected $adminFilterable;
    protected $analyticsQueryable;
    protected $cartToOrderCopyable;
    protected $smartCollectionCondition;
    protected $uniqueValues;

    
    /**
     * Indicate whether a metafield definition is configured for filtering.
     *
     * @return ShopifyMetafieldCapabilityAdminFilterable
     */
    public function getAdminFilterable(): ?ShopifyMetafieldCapabilityAdminFilterable
    {
        return $this->adminFilterable;
    }

    
    /**
     * Indicate whether a metafield definition can be queried in analytics.
     *
     * @return ShopifyMetafieldCapabilityAnalyticsQueryable
     */
    public function getAnalyticsQueryable(): ?ShopifyMetafieldCapabilityAnalyticsQueryable
    {
        return $this->analyticsQueryable;
    }

    
    /**
     * The capability configuration for automatically copying values from a cart metafield to the corresponding order metafield when an order is created.
     *
     * @return ShopifyMetafieldCapabilityCartToOrderCopyable
     */
    public function getCartToOrderCopyable(): ?ShopifyMetafieldCapabilityCartToOrderCopyable
    {
        return $this->cartToOrderCopyable;
    }

    
    /**
     * Indicate whether a metafield definition can be used as a smart collection condition.
     *
     * @return ShopifyMetafieldCapabilitySmartCollectionCondition
     */
    public function getSmartCollectionCondition(): ?ShopifyMetafieldCapabilitySmartCollectionCondition
    {
        return $this->smartCollectionCondition;
    }

    
    /**
     * Indicate whether the metafield values for a metafield definition are required to be unique.
     *
     * @return ShopifyMetafieldCapabilityUniqueValues
     */
    public function getUniqueValues(): ?ShopifyMetafieldCapabilityUniqueValues
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
