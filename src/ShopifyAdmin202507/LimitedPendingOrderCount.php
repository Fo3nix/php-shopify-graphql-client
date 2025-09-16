<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class LimitedPendingOrderCount
{
    protected $atMax;
    protected $count;

    
    /**
     * @return bool
     */
    public function getAtMax()
    {
        return $this->atMax;
    }

    
    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['atMax']) && $data['atMax'] !== null) {
                $instance->atMax = $data['atMax'];
            }
            if (isset($data['count']) && $data['count'] !== null) {
                $instance->count = $data['count'];
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
            if ($this->atMax !== null) {
                $data['atMax'] = $this->atMax;
            }
            if ($this->count !== null) {
                $data['count'] = $this->count;
            }
            return $data;
        }
}
