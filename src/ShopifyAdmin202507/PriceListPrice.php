<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\QuantityPriceBreakConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductVariant;

class PriceListPrice
{
    protected $compareAtPrice;
    protected $originType;
    protected $price;
    protected $quantityPriceBreaks;
    protected $variant;

    
    /**
     * @return MoneyV2
     */
    public function getCompareAtPrice()
    {
        return $this->compareAtPrice;
    }

    
    /**
     * @return PriceListPriceOriginTypeEnumObject
     */
    public function getOriginType()
    {
        return $this->originType;
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
     * @return ProductVariant
     */
    public function getVariant()
    {
        return $this->variant;
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
            if (isset($data['originType']) && $data['originType'] !== null) {
                $instance->originType = $data['originType'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = MoneyV2::fromArray($data['price']);
            }
            if (isset($data['quantityPriceBreaks']) && $data['quantityPriceBreaks'] !== null) {
                $instance->quantityPriceBreaks = QuantityPriceBreakConnection::fromArray($data['quantityPriceBreaks']);
            }
            if (isset($data['variant']) && $data['variant'] !== null) {
                $instance->variant = ProductVariant::fromArray($data['variant']);
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
            if ($this->originType !== null) {
                $data['originType'] = $this->originType;
            }
            if ($this->price !== null) {
                $data['price'] = $this->price->asArray();
            }
            if ($this->quantityPriceBreaks !== null) {
                $data['quantityPriceBreaks'] = $this->quantityPriceBreaks->asArray();
            }
            if ($this->variant !== null) {
                $data['variant'] = $this->variant->asArray();
            }
            return $data;
        }
}
