<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;

/**
 * The value of the discount and how it will be applied.
 */
class ShopifySubscriptionDiscountFixedAmountValue
{
    protected $amount;
    protected $appliesOnEachItem;

    
    /**
     * The fixed amount value of the discount.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmount(): ?ShopifyMoneyV2
    {
        return $this->amount;
    }

    
    /**
     * Whether the amount is applied per item.
     *
     * @return bool
     */
    public function getAppliesOnEachItem(): ?bool
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
                $instance->amount = ShopifyMoneyV2::fromArray($data['amount']);
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
