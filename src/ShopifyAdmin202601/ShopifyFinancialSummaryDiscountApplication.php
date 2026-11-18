<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * Discount applications capture the intentions of a discount source at
 * the time of application on an order's line items or shipping lines.
 */
class ShopifyFinancialSummaryDiscountApplication
{
    protected $allocationMethod;
    protected $targetSelection;
    protected $targetType;

    
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['allocationMethod']) && $data['allocationMethod'] !== null) {
                $instance->allocationMethod = $data['allocationMethod'];
            }
            if (isset($data['targetSelection']) && $data['targetSelection'] !== null) {
                $instance->targetSelection = $data['targetSelection'];
            }
            if (isset($data['targetType']) && $data['targetType'] !== null) {
                $instance->targetType = $data['targetType'];
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
            if ($this->targetSelection !== null) {
                $data['targetSelection'] = $this->targetSelection;
            }
            if ($this->targetType !== null) {
                $data['targetType'] = $this->targetType;
            }
            return $data;
        }
}
