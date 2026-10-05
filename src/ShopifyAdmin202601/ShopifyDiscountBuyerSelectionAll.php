<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyDiscountBuyerSelectionAll
{
    protected $all;

    
    /**
     * @return ShopifyDiscountBuyerSelectionEnumObject
     */
    public function getAll()
    {
        return $this->all;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['all']) && $data['all'] !== null) {
                $instance->all = $data['all'];
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
            if ($this->all !== null) {
                $data['all'] = $this->all;
            }
            return $data;
        }
}
