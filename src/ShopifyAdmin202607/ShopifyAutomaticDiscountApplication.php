<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPricingValueHydrator;

/**
 * Automatic discount applications capture the intentions of a discount that was automatically applied.
 */
class ShopifyAutomaticDiscountApplication implements ShopifyDiscountApplication
{
    protected $allocationMethod;
    protected $index;
    protected $targetSelection;
    protected $targetType;
    protected $title;
    protected $value;

    
    /**
     * The method by which the discount's value is applied to its entitled items.
     *
     * @return string A ShopifyDiscountApplicationAllocationMethodEnumObject value
     */
    public function getAllocationMethod(): ?string
    {
        return $this->allocationMethod;
    }

    
    /**
     * An ordered index that can be used to identify the discount application and indicate the precedence
     * of the discount application for calculations.
     *
     * @return int
     */
    public function getIndex(): ?int
    {
        return $this->index;
    }

    
    /**
     * How the discount amount is distributed on the discounted lines.
     *
     * @return string A ShopifyDiscountApplicationTargetSelectionEnumObject value
     */
    public function getTargetSelection(): ?string
    {
        return $this->targetSelection;
    }

    
    /**
     * Whether the discount is applied on line items or shipping lines.
     *
     * @return string A ShopifyDiscountApplicationTargetTypeEnumObject value
     */
    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    
    /**
     * The title of the discount application.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The value of the discount application.
     *
     * @return ShopifyMoneyV2|ShopifyPricingPercentageValue
     */
    public function getValue(): ShopifyMoneyV2|ShopifyPricingPercentageValue|null
    {
        return $this->value;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['allocationMethod']) && $data['allocationMethod'] !== null) {
                $instance->allocationMethod = $data['allocationMethod'];
            }
            if (isset($data['index']) && $data['index'] !== null) {
                $instance->index = $data['index'];
            }
            if (isset($data['targetSelection']) && $data['targetSelection'] !== null) {
                $instance->targetSelection = $data['targetSelection'];
            }
            if (isset($data['targetType']) && $data['targetType'] !== null) {
                $instance->targetType = $data['targetType'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = ShopifyPricingValueHydrator::fromArray($data['value']);
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
            if ($this->allocationMethod !== null) {
                $data['allocationMethod'] = $this->allocationMethod;
            }
            if ($this->index !== null) {
                $data['index'] = $this->index;
            }
            if ($this->targetSelection !== null) {
                $data['targetSelection'] = $this->targetSelection;
            }
            if ($this->targetType !== null) {
                $data['targetType'] = $this->targetType;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->value !== null) {
                $data['value'] = ShopifyPricingValueHydrator::toArray($this->value);
            }
            return $data;
        }
}
