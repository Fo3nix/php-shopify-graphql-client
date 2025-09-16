<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;

class ProductCompareAtPriceRange
{
    protected $maxVariantCompareAtPrice;
    protected $minVariantCompareAtPrice;

    
    /**
     * @return MoneyV2
     */
    public function getMaxVariantCompareAtPrice()
    {
        return $this->maxVariantCompareAtPrice;
    }

    
    /**
     * @return MoneyV2
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
                $instance->maxVariantCompareAtPrice = MoneyV2::fromArray($data['maxVariantCompareAtPrice']);
            }
            if (isset($data['minVariantCompareAtPrice']) && $data['minVariantCompareAtPrice'] !== null) {
                $instance->minVariantCompareAtPrice = MoneyV2::fromArray($data['minVariantCompareAtPrice']);
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
