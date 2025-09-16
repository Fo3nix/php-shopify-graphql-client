<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class SegmentAttributeStatistics
{
    protected $average;
    protected $sum;

    
    /**
     * @return float
     */
    public function getAverage()
    {
        return $this->average;
    }

    
    /**
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['average']) && $data['average'] !== null) {
                $instance->average = $data['average'];
            }
            if (isset($data['sum']) && $data['sum'] !== null) {
                $instance->sum = $data['sum'];
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
            if ($this->average !== null) {
                $data['average'] = $this->average;
            }
            if ($this->sum !== null) {
                $data['sum'] = $this->sum;
            }
            return $data;
        }
}
