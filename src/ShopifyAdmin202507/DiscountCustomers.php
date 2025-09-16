<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Customer;

class DiscountCustomers
{
    protected $customers;

    
    /**
     * @return Customer[]
     */
    public function getCustomers()
    {
        return $this->customers;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customers']) && $data['customers'] !== null) {
                $instance->customers = array_map(function($item) { return Customer::fromArray($item); }, $data['customers']);
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
            if ($this->customers !== null) {
                $data['customers'] = array_map(function($item) { return $item->asArray(); }, $this->customers);
            }
            return $data;
        }
}
