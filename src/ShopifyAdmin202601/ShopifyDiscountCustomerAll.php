<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * Creates the broadest possible discount reach by targeting all customers, regardless of their purchase history or segment membership. This gives merchants maximum flexibility to run store-wide promotions without worrying about customer eligibility restrictions.
 *
 * For example, a flash sale or grand opening promotion would target all customers to maximize participation and store visibility.
 *
 * Learn more about [customer targeting](https://help.shopify.com/manual/discounts/).
 */
class ShopifyDiscountCustomerAll
{
    protected $allCustomers;

    
    /**
     * Whether the discount can be applied by all customers. This value is always `true`.
     *
     * @return bool
     */
    public function getAllCustomers(): ?bool
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
