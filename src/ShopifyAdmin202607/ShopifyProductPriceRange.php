<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;

class ShopifyProductPriceRange
{
    protected $maxVariantPrice;
    protected $minVariantPrice;

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getMaxVariantPrice()
    {
        return $this->maxVariantPrice;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getMinVariantPrice()
    {
        return $this->minVariantPrice;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['maxVariantPrice']) && $data['maxVariantPrice'] !== null) {
                $instance->maxVariantPrice = ShopifyMoneyV2::fromArray($data['maxVariantPrice']);
            }
            if (isset($data['minVariantPrice']) && $data['minVariantPrice'] !== null) {
                $instance->minVariantPrice = ShopifyMoneyV2::fromArray($data['minVariantPrice']);
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
            if ($this->maxVariantPrice !== null) {
                $data['maxVariantPrice'] = $this->maxVariantPrice->asArray();
            }
            if ($this->minVariantPrice !== null) {
                $data['minVariantPrice'] = $this->minVariantPrice->asArray();
            }
            return $data;
        }
}
