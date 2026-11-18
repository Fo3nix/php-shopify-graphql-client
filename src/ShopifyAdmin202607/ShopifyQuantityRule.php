<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductVariant;

/**
 * The quantity rule for the product variant in a given context.
 */
class ShopifyQuantityRule
{
    protected $increment;
    protected $isDefault;
    protected $maximum;
    protected $minimum;
    protected $originType;
    protected $productVariant;

    
    /**
     * The value that specifies the quantity increment between minimum and maximum of the rule.
     * Only quantities divisible by this value will be considered valid.
     *
     * The increment must be lower than or equal to the minimum and the maximum, and both minimum and maximum
     * must be divisible by this value.
     *
     * @return int
     */
    public function getIncrement(): ?int
    {
        return $this->increment;
    }

    
    /**
     * Whether the quantity rule fields match one increment, one minimum and no maximum.
     *
     * @return bool
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    
    /**
     * An optional value that defines the highest allowed quantity purchased by the customer.
     * If defined, maximum must be lower than or equal to the minimum and must be a multiple of the increment.
     *
     * @return int
     */
    public function getMaximum(): ?int
    {
        return $this->maximum;
    }

    
    /**
     * The value that defines the lowest allowed quantity purchased by the customer.
     * The minimum must be a multiple of the quantity rule's increment.
     *
     * @return int
     */
    public function getMinimum(): ?int
    {
        return $this->minimum;
    }

    
    /**
     * Whether the values of the quantity rule were explicitly set.
     *
     * @return string A ShopifyQuantityRuleOriginTypeEnumObject value
     */
    public function getOriginType(): ?string
    {
        return $this->originType;
    }

    
    /**
     * The product variant for which the quantity rule is applied.
     *
     * @return ShopifyProductVariant
     */
    public function getProductVariant(): ?ShopifyProductVariant
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
                $instance->productVariant = ShopifyProductVariant::fromArray($data['productVariant']);
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
