<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyQuantityPriceBreakConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductVariant;

class ShopifyPriceListPrice
{
    protected $compareAtPrice;
    protected $originType;
    protected $price;
    protected $quantityPriceBreaks;
    protected $variant;

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getCompareAtPrice()
    {
        return $this->compareAtPrice;
    }

    
    /**
     * @return ShopifyPriceListPriceOriginTypeEnumObject
     */
    public function getOriginType()
    {
        return $this->originType;
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
     * @return ShopifyProductVariant
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
                $instance->compareAtPrice = ShopifyMoneyV2::fromArray($data['compareAtPrice']);
            }
            if (isset($data['originType']) && $data['originType'] !== null) {
                $instance->originType = $data['originType'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = ShopifyMoneyV2::fromArray($data['price']);
            }
            if (isset($data['quantityPriceBreaks']) && $data['quantityPriceBreaks'] !== null) {
                $instance->quantityPriceBreaks = ShopifyQuantityPriceBreakConnection::fromArray($data['quantityPriceBreaks']);
            }
            if (isset($data['variant']) && $data['variant'] !== null) {
                $instance->variant = ShopifyProductVariant::fromArray($data['variant']);
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
