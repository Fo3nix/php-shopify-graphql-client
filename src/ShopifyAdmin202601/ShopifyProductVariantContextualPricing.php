<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyQuantityPriceBreakConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyQuantityRule;

/**
 * The price of a product variant in a specific country.
 * Prices vary between countries.
 */
class ShopifyProductVariantContextualPricing
{
    protected $compareAtPrice;
    protected $price;
    protected $quantityPriceBreaks;
    protected $quantityRule;
    protected $unitPrice;

    
    /**
     * The final compare-at price after all adjustments are applied.
     *
     * @return ShopifyMoneyV2
     */
    public function getCompareAtPrice(): ?ShopifyMoneyV2
    {
        return $this->compareAtPrice;
    }

    
    /**
     * The final price after all adjustments are applied.
     *
     * @return ShopifyMoneyV2
     */
    public function getPrice(): ?ShopifyMoneyV2
    {
        return $this->price;
    }

    
    /**
     * A list of quantity breaks for the product variant.
     *
     * @return ShopifyQuantityPriceBreakConnection
     */
    public function getQuantityPriceBreaks(): ?ShopifyQuantityPriceBreakConnection
    {
        return $this->quantityPriceBreaks;
    }

    
    /**
     * The quantity rule applied for a given context.
     *
     * @return ShopifyQuantityRule
     */
    public function getQuantityRule(): ?ShopifyQuantityRule
    {
        return $this->quantityRule;
    }

    
    /**
     * The unit price value for the given context based on the variant measurement.
     *
     * @return ShopifyMoneyV2
     */
    public function getUnitPrice(): ?ShopifyMoneyV2
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
