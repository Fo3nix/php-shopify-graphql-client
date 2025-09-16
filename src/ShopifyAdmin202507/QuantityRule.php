<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductVariant;

class QuantityRule
{
    protected $increment;
    protected $isDefault;
    protected $maximum;
    protected $minimum;
    protected $originType;
    protected $productVariant;

    
    /**
     * @return int
     */
    public function getIncrement()
    {
        return $this->increment;
    }

    
    /**
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    
    /**
     * @return int
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    
    /**
     * @return int
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    
    /**
     * @return QuantityRuleOriginTypeEnumObject
     */
    public function getOriginType()
    {
        return $this->originType;
    }

    
    /**
     * @return ProductVariant
     */
    public function getProductVariant()
    {
        return $this->productVariant;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['increment']) && $data['increment'] !== null) {
                $instance->increment = $data['increment'];
            }
            if (isset($data['isDefault']) && $data['isDefault'] !== null) {
                $instance->isDefault = $data['isDefault'];
            }
            if (isset($data['maximum']) && $data['maximum'] !== null) {
                $instance->maximum = $data['maximum'];
            }
            if (isset($data['minimum']) && $data['minimum'] !== null) {
                $instance->minimum = $data['minimum'];
            }
            if (isset($data['originType']) && $data['originType'] !== null) {
                $instance->originType = $data['originType'];
            }
            if (isset($data['productVariant']) && $data['productVariant'] !== null) {
                $instance->productVariant = ProductVariant::fromArray($data['productVariant']);
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
            if ($this->increment !== null) {
                $data['increment'] = $this->increment;
            }
            if ($this->isDefault !== null) {
                $data['isDefault'] = $this->isDefault;
            }
            if ($this->maximum !== null) {
                $data['maximum'] = $this->maximum;
            }
            if ($this->minimum !== null) {
                $data['minimum'] = $this->minimum;
            }
            if ($this->originType !== null) {
                $data['originType'] = $this->originType;
            }
            if ($this->productVariant !== null) {
                $data['productVariant'] = $this->productVariant->asArray();
            }
            return $data;
        }
}
