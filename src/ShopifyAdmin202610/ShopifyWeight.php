<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A weight measurement with its numeric value and unit. Used throughout the API, for example in shipping calculations, delivery conditions, order line items, and inventory measurements.
 *
 * The weight combines a decimal value with a standard unit of measurement to ensure consistent weight handling across different regional systems.
 */
class ShopifyWeight
{
    protected $unit;
    protected $value;

    
    /**
     * The unit of measurement for `value`.
     *
     * @return string A ShopifyWeightUnitEnumObject value
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    
    /**
     * The weight value using the unit system specified with `unit`.
     *
     * @return float
     */
    public function getValue(): ?float
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
            if (isset($data['unit']) && $data['unit'] !== null) {
                $instance->unit = $data['unit'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = $data['value'];
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
            if ($this->unit !== null) {
                $data['unit'] = $this->unit;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
