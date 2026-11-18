<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * A distance, which includes a numeric value and a unit of measurement.
 */
class ShopifyDistance
{
    protected $unit;
    protected $value;

    
    /**
     * The unit of measurement for `value`.
     *
     * @return string A ShopifyDistanceUnitEnumObject value
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    
    /**
     * The distance value using the unit system specified with `unit`.
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
