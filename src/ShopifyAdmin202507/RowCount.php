<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class RowCount
{
    protected $count;
    protected $exceedsMax;

    
    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    
    /**
     * @return bool
     */
    public function getExceedsMax()
    {
        return $this->exceedsMax;
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
            if (isset($data['exceedsMax']) && $data['exceedsMax'] !== null) {
                $instance->exceedsMax = $data['exceedsMax'];
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
            if ($this->exceedsMax !== null) {
                $data['exceedsMax'] = $this->exceedsMax;
            }
            return $data;
        }
}
