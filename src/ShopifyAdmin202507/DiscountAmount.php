<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;

class DiscountAmount
{
    protected $amount;
    protected $appliesOnEachItem;

    
    /**
     * @return MoneyV2
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return bool
     */
    public function getAppliesOnEachItem()
    {
        return $this->appliesOnEachItem;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = MoneyV2::fromArray($data['amount']);
            }
            if (isset($data['appliesOnEachItem']) && $data['appliesOnEachItem'] !== null) {
                $instance->appliesOnEachItem = $data['appliesOnEachItem'];
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
                $data['amount'] = $this->amount->asArray();
            }
            if ($this->appliesOnEachItem !== null) {
                $data['appliesOnEachItem'] = $this->appliesOnEachItem;
            }
            return $data;
        }
}
