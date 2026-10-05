<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifySubscriptionContractCalculationCadence
{
    protected $count;
    protected $unit;

    
    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    
    /**
     * @return ShopifySubscriptionContractCalculationCadenceUnitEnumObject
     */
    public function getUnit()
    {
        return $this->unit;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['count']) && $data['count'] !== null) {
                $instance->count = $data['count'];
            }
            if (isset($data['unit']) && $data['unit'] !== null) {
                $instance->unit = $data['unit'];
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
            if ($this->count !== null) {
                $data['count'] = $this->count;
            }
            if ($this->unit !== null) {
                $data['unit'] = $this->unit;
            }
            return $data;
        }
}
