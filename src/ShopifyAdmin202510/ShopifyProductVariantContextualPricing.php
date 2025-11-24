<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyQuantityPriceBreakConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyQuantityRule;

class ShopifyProductVariantContextualPricing
{
    protected $compareAtPrice;
    protected $price;
    protected $quantityPriceBreaks;
    protected $quantityRule;
    protected $unitPrice;

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getCompareAtPrice()
    {
        return $this->compareAtPrice;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getPrice()
    {
        return $this->price;
    }

    
    /**
     * @return ShopifyQuantityPriceBreakConnection
     */
    public function getQuantityPriceBreaks()
    {
        return $this->quantityPriceBreaks;
    }

    
    /**
     * @return ShopifyQuantityRule
     */
    public function getQuantityRule()
    {
        return $this->quantityRule;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['compareAtPrice']) && $data['compareAtPrice'] !== null) {
                $instance->compareAtPrice = ShopifyMoneyV2::fromArray($data['compareAtPrice']);
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = ShopifyMoneyV2::fromArray($data['price']);
            }
            if (isset($data['quantityPriceBreaks']) && $data['quantityPriceBreaks'] !== null) {
                $instance->quantityPriceBreaks = ShopifyQuantityPriceBreakConnection::fromArray($data['quantityPriceBreaks']);
            }
            if (isset($data['quantityRule']) && $data['quantityRule'] !== null) {
                $instance->quantityRule = ShopifyQuantityRule::fromArray($data['quantityRule']);
            }
            if (isset($data['unitPrice']) && $data['unitPrice'] !== null) {
                $instance->unitPrice = ShopifyMoneyV2::fromArray($data['unitPrice']);
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
            if ($this->compareAtPrice !== null) {
                $data['compareAtPrice'] = $this->compareAtPrice->asArray();
            }
            if ($this->price !== null) {
                $data['price'] = $this->price->asArray();
            }
            if ($this->quantityPriceBreaks !== null) {
                $data['quantityPriceBreaks'] = $this->quantityPriceBreaks->asArray();
            }
            if ($this->quantityRule !== null) {
                $data['quantityRule'] = $this->quantityRule->asArray();
            }
            if ($this->unitPrice !== null) {
                $data['unitPrice'] = $this->unitPrice->asArray();
            }
            return $data;
        }
}
