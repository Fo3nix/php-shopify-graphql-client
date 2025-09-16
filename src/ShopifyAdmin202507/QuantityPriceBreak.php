<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PriceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductVariant;

class QuantityPriceBreak
{
    protected $id;
    protected $minimumQuantity;
    protected $price;
    protected $priceList;
    protected $variant;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return int
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    
    /**
     * @return MoneyV2
     */
    public function getPrice()
    {
        return $this->price;
    }

    
    /**
     * @return PriceList
     */
    public function getPriceList()
    {
        return $this->priceList;
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['minimumQuantity']) && $data['minimumQuantity'] !== null) {
                $instance->minimumQuantity = $data['minimumQuantity'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = MoneyV2::fromArray($data['price']);
            }
            if (isset($data['priceList']) && $data['priceList'] !== null) {
                $instance->priceList = PriceList::fromArray($data['priceList']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->minimumQuantity !== null) {
                $data['minimumQuantity'] = $this->minimumQuantity;
            }
            if ($this->price !== null) {
                $data['price'] = $this->price->asArray();
            }
            if ($this->priceList !== null) {
                $data['priceList'] = $this->priceList->asArray();
            }
            if ($this->variant !== null) {
                $data['variant'] = $this->variant->asArray();
            }
            return $data;
        }
}
