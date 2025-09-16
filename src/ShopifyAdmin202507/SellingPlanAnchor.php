<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class SellingPlanAnchor
{
    protected $cutoffDay;
    protected $day;
    protected $month;
    protected $type;

    
    /**
     * @return int
     */
    public function getCutoffDay()
    {
        return $this->cutoffDay;
    }

    
    /**
     * @return int
     */
    public function getDay()
    {
        return $this->day;
    }

    
    /**
     * @return int
     */
    public function getMonth()
    {
        return $this->month;
    }

    
    /**
     * @return SellingPlanAnchorTypeEnumObject
     */
    public function getType()
    {
        return $this->type;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['cutoffDay']) && $data['cutoffDay'] !== null) {
                $instance->cutoffDay = $data['cutoffDay'];
            }
            if (isset($data['day']) && $data['day'] !== null) {
                $instance->day = $data['day'];
            }
            if (isset($data['month']) && $data['month'] !== null) {
                $instance->month = $data['month'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
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
            if ($this->cutoffDay !== null) {
                $data['cutoffDay'] = $this->cutoffDay;
            }
            if ($this->day !== null) {
                $data['day'] = $this->day;
            }
            if ($this->month !== null) {
                $data['month'] = $this->month;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            return $data;
        }
}
