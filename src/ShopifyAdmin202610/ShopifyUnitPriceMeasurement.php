<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * The measurement used to calculate a unit price for a product variant (e.g. $9.99 / 100ml).
 */
class ShopifyUnitPriceMeasurement
{
    protected $measuredType;
    protected $quantityUnit;
    protected $quantityValue;
    protected $referenceUnit;
    protected $referenceValue;

    
    /**
     * The type of unit of measurement for the unit price measurement.
     *
     * @return string A ShopifyUnitPriceMeasurementMeasuredTypeEnumObject value
     */
    public function getMeasuredType(): ?string
    {
        return $this->measuredType;
    }

    
    /**
     * The quantity unit for the unit price measurement.
     *
     * @return string A ShopifyUnitPriceMeasurementMeasuredUnitEnumObject value
     */
    public function getQuantityUnit(): ?string
    {
        return $this->quantityUnit;
    }

    
    /**
     * The quantity value for the unit price measurement.
     *
     * @return float
     */
    public function getQuantityValue(): ?float
    {
        return $this->quantityValue;
    }

    
    /**
     * The reference unit for the unit price measurement.
     *
     * @return string A ShopifyUnitPriceMeasurementMeasuredUnitEnumObject value
     */
    public function getReferenceUnit(): ?string
    {
        return $this->referenceUnit;
    }

    
    /**
     * The reference value for the unit price measurement.
     *
     * @return int
     */
    public function getReferenceValue(): ?int
    {
        return $this->referenceValue;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['measuredType']) && $data['measuredType'] !== null) {
                $instance->measuredType = $data['measuredType'];
            }
            if (isset($data['quantityUnit']) && $data['quantityUnit'] !== null) {
                $instance->quantityUnit = $data['quantityUnit'];
            }
            if (isset($data['quantityValue']) && $data['quantityValue'] !== null) {
                $instance->quantityValue = $data['quantityValue'];
            }
            if (isset($data['referenceUnit']) && $data['referenceUnit'] !== null) {
                $instance->referenceUnit = $data['referenceUnit'];
            }
            if (isset($data['referenceValue']) && $data['referenceValue'] !== null) {
                $instance->referenceValue = $data['referenceValue'];
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
            if ($this->measuredType !== null) {
                $data['measuredType'] = $this->measuredType;
            }
            if ($this->quantityUnit !== null) {
                $data['quantityUnit'] = $this->quantityUnit;
            }
            if ($this->quantityValue !== null) {
                $data['quantityValue'] = $this->quantityValue;
            }
            if ($this->referenceUnit !== null) {
                $data['referenceUnit'] = $this->referenceUnit;
            }
            if ($this->referenceValue !== null) {
                $data['referenceValue'] = $this->referenceValue;
            }
            return $data;
        }
}
