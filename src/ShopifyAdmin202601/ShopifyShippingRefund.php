<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyBag;

/**
 * Represents the shipping costs refunded on the Refund.
 */
class ShopifyShippingRefund
{
    protected $amount;
    protected $amountSet;
    protected $maximumRefundable;
    protected $maximumRefundableSet;
    protected $tax;
    protected $taxSet;

    
    /**
     * The monetary value of the shipping fees to be refunded.
     *
     * @return string
     */
    public function getAmount(): mixed
    {
        return $this->amount;
    }

    
    /**
     * The monetary value of the shipping fees to be refunded in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmountSet(): ?ShopifyMoneyBag
    {
        return $this->amountSet;
    }

    
    /**
     * The maximum amount of shipping fees currently refundable.
     *
     * @return string
     */
    public function getMaximumRefundable(): mixed
    {
        return $this->maximumRefundable;
    }

    
    /**
     * The maximum amount of shipping fees currently refundable in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getMaximumRefundableSet(): ?ShopifyMoneyBag
    {
        return $this->maximumRefundableSet;
    }

    
    /**
     * The monetary value of the tax allocated to shipping fees to be refunded.
     *
     * @return string
     */
    public function getTax(): mixed
    {
        return $this->tax;
    }

    
    /**
     * The monetary value of the tax allocated to shipping fees to be refunded in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getTaxSet(): ?ShopifyMoneyBag
    {
        return $this->taxSet;
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
            if (isset($data['amountSet']) && $data['amountSet'] !== null) {
                $instance->amountSet = ShopifyMoneyBag::fromArray($data['amountSet']);
            }
            if (isset($data['maximumRefundable']) && $data['maximumRefundable'] !== null) {
                $instance->maximumRefundable = $data['maximumRefundable'];
            }
            if (isset($data['maximumRefundableSet']) && $data['maximumRefundableSet'] !== null) {
                $instance->maximumRefundableSet = ShopifyMoneyBag::fromArray($data['maximumRefundableSet']);
            }
            if (isset($data['tax']) && $data['tax'] !== null) {
                $instance->tax = $data['tax'];
            }
            if (isset($data['taxSet']) && $data['taxSet'] !== null) {
                $instance->taxSet = ShopifyMoneyBag::fromArray($data['taxSet']);
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
            if ($this->amountSet !== null) {
                $data['amountSet'] = $this->amountSet->asArray();
            }
            if ($this->maximumRefundable !== null) {
                $data['maximumRefundable'] = $this->maximumRefundable;
            }
            if ($this->maximumRefundableSet !== null) {
                $data['maximumRefundableSet'] = $this->maximumRefundableSet->asArray();
            }
            if ($this->tax !== null) {
                $data['tax'] = $this->tax;
            }
            if ($this->taxSet !== null) {
                $data['taxSet'] = $this->taxSet->asArray();
            }
            return $data;
        }
}
