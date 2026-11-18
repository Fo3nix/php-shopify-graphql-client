<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * A purchase amount in the context of a discount. This object can be used to define the minimum purchase amount required for a discount to be applicable.
 */
class ShopifyDiscountPurchaseAmount
{
    protected $amount;

    
    /**
     * The purchase amount in decimal format.
     *
     * @return string
     */
    public function getAmount(): mixed
    {
        return $this->amount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = $data['amount'];
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
            if ($this->amount !== null) {
                $data['amount'] = $this->amount;
            }
            return $data;
        }
}
