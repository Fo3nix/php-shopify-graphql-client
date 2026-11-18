<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPriceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductVariant;

/**
 * Quantity price breaks lets you offer different rates that are based on the
 * amount of a specific variant being ordered.
 */
class ShopifyQuantityPriceBreak implements ShopifyNode
{
    protected $id;
    protected $minimumQuantity;
    protected $price;
    protected $priceList;
    protected $variant;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Minimum quantity required to reach new quantity break price.
     *
     * @return int
     */
    public function getMinimumQuantity(): ?int
    {
        return $this->minimumQuantity;
    }

    
    /**
     * The price of variant after reaching the minimum quantity.
     *
     * @return ShopifyMoneyV2
     */
    public function getPrice(): ?ShopifyMoneyV2
    {
        return $this->price;
    }

    
    /**
     * The price list associated with this quantity break.
     *
     * @return ShopifyPriceList
     */
    public function getPriceList(): ?ShopifyPriceList
    {
        return $this->priceList;
    }

    
    /**
     * The product variant associated with this quantity break.
     *
     * @return ShopifyProductVariant
     */
    public function getVariant(): ?ShopifyProductVariant
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
                $instance->price = ShopifyMoneyV2::fromArray($data['price']);
            }
            if (isset($data['priceList']) && $data['priceList'] !== null) {
                $instance->priceList = ShopifyPriceList::fromArray($data['priceList']);
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
