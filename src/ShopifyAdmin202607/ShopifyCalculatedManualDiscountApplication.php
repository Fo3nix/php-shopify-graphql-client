<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPricingValueHydrator;

/**
 * Represents a discount that was manually created for an order that is being edited.
 */
class ShopifyCalculatedManualDiscountApplication implements ShopifyCalculatedDiscountApplication
{
    protected $allocationMethod;
    protected $appliedTo;
    protected $description;
    protected $id;
    protected $targetSelection;
    protected $targetType;
    protected $value;

    
    /**
     * The method by which the discount's value is allocated to its entitled items.
     *
     * @return string A ShopifyDiscountApplicationAllocationMethodEnumObject value
     */
    public function getAllocationMethod(): ?string
    {
        return $this->allocationMethod;
    }

    
    /**
     * The level at which the discount was applied.
     *
     * @return string A ShopifyDiscountApplicationLevelEnumObject value
     */
    public function getAppliedTo(): ?string
    {
        return $this->appliedTo;
    }

    
    /**
     * The description of discount application. Indicates the reason why the discount was applied.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
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
            if (isset($data['appliedTo']) && $data['appliedTo'] !== null) {
                $instance->appliedTo = $data['appliedTo'];
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['targetSelection']) && $data['targetSelection'] !== null) {
                $instance->targetSelection = $data['targetSelection'];
            }
            if (isset($data['targetType']) && $data['targetType'] !== null) {
                $instance->targetType = $data['targetType'];
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
            if ($this->appliedTo !== null) {
                $data['appliedTo'] = $this->appliedTo;
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->targetSelection !== null) {
                $data['targetSelection'] = $this->targetSelection;
            }
            if ($this->targetType !== null) {
                $data['targetType'] = $this->targetType;
            }
            if ($this->value !== null) {
                $data['value'] = ShopifyPricingValueHydrator::toArray($this->value);
            }
            return $data;
        }
}
