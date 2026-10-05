<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;

class ShopifyProductCompareAtPriceRange
{
    protected $maxVariantCompareAtPrice;
    protected $minVariantCompareAtPrice;

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getMaxVariantCompareAtPrice()
    {
        return $this->maxVariantCompareAtPrice;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getMinVariantCompareAtPrice()
    {
        return $this->minVariantCompareAtPrice;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['maxVariantCompareAtPrice']) && $data['maxVariantCompareAtPrice'] !== null) {
                $instance->maxVariantCompareAtPrice = ShopifyMoneyV2::fromArray($data['maxVariantCompareAtPrice']);
            }
            if (isset($data['minVariantCompareAtPrice']) && $data['minVariantCompareAtPrice'] !== null) {
                $instance->minVariantCompareAtPrice = ShopifyMoneyV2::fromArray($data['minVariantCompareAtPrice']);
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
            if ($this->maxVariantCompareAtPrice !== null) {
                $data['maxVariantCompareAtPrice'] = $this->maxVariantCompareAtPrice->asArray();
            }
            if ($this->minVariantCompareAtPrice !== null) {
                $data['minVariantCompareAtPrice'] = $this->minVariantCompareAtPrice->asArray();
            }
            return $data;
        }
}
