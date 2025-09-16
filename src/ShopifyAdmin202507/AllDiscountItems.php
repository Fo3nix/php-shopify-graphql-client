<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class AllDiscountItems
{
    protected $allItems;

    
    /**
     * @return bool
     */
    public function getAllItems()
    {
        return $this->allItems;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['allItems']) && $data['allItems'] !== null) {
                $instance->allItems = $data['allItems'];
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
            if ($this->allItems !== null) {
                $data['allItems'] = $this->allItems;
            }
            return $data;
        }
}
