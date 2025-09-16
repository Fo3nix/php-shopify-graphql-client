<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\QuantityPriceBreakConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\QuantityRule;

class ProductVariantContextualPricing
{
    protected $compareAtPrice;
    protected $price;
    protected $quantityPriceBreaks;
    protected $quantityRule;
    protected $unitPrice;

    
    /**
     * @return MoneyV2
     */
    public function getCompareAtPrice()
    {
        return $this->compareAtPrice;
    }

    
    /**
     * @return MoneyV2
     */
    public function getPrice()
    {
        return $this->price;
    }

    
    /**
     * @return QuantityPriceBreakConnection
     */
    public function getQuantityPriceBreaks()
    {
        return $this->quantityPriceBreaks;
    }

    
    /**
     * @return QuantityRule
     */
    public function getQuantityRule()
    {
        return $this->quantityRule;
    }

    
    /**
     * @return MoneyV2
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
                $instance->compareAtPrice = MoneyV2::fromArray($data['compareAtPrice']);
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = MoneyV2::fromArray($data['price']);
            }
            if (isset($data['quantityPriceBreaks']) && $data['quantityPriceBreaks'] !== null) {
                $instance->quantityPriceBreaks = QuantityPriceBreakConnection::fromArray($data['quantityPriceBreaks']);
            }
            if (isset($data['quantityRule']) && $data['quantityRule'] !== null) {
                $instance->quantityRule = QuantityRule::fromArray($data['quantityRule']);
            }
            if (isset($data['unitPrice']) && $data['unitPrice'] !== null) {
                $instance->unitPrice = MoneyV2::fromArray($data['unitPrice']);
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
