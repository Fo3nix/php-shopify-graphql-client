<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class DiscountCustomerAll
{
    protected $allCustomers;

    
    /**
     * @return bool
     */
    public function getAllCustomers()
    {
        return $this->allCustomers;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['allCustomers']) && $data['allCustomers'] !== null) {
                $instance->allCustomers = $data['allCustomers'];
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
            if ($this->allCustomers !== null) {
                $data['allCustomers'] = $this->allCustomers;
            }
            return $data;
        }
}
