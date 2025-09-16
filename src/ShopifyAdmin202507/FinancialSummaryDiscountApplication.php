<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class FinancialSummaryDiscountApplication
{
    protected $allocationMethod;
    protected $targetSelection;
    protected $targetType;

    
    /**
     * @return DiscountApplicationAllocationMethodEnumObject
     */
    public function getAllocationMethod()
    {
        return $this->allocationMethod;
    }

    
    /**
     * @return DiscountApplicationTargetSelectionEnumObject
     */
    public function getTargetSelection()
    {
        return $this->targetSelection;
    }

    
    /**
     * @return DiscountApplicationTargetTypeEnumObject
     */
    public function getTargetType()
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
