<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;

class ShippingRefund
{
    protected $amount;
    protected $amountSet;
    protected $maximumRefundable;
    protected $maximumRefundableSet;
    protected $tax;
    protected $taxSet;

    
    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return MoneyBag
     */
    public function getAmountSet()
    {
        return $this->amountSet;
    }

    
    /**
     * @return string
     */
    public function getMaximumRefundable()
    {
        return $this->maximumRefundable;
    }

    
    /**
     * @return MoneyBag
     */
    public function getMaximumRefundableSet()
    {
        return $this->maximumRefundableSet;
    }

    
    /**
     * @return string
     */
    public function getTax()
    {
        return $this->tax;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTaxSet()
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
                $instance->amountSet = MoneyBag::fromArray($data['amountSet']);
            }
            if (isset($data['maximumRefundable']) && $data['maximumRefundable'] !== null) {
                $instance->maximumRefundable = $data['maximumRefundable'];
            }
            if (isset($data['maximumRefundableSet']) && $data['maximumRefundableSet'] !== null) {
                $instance->maximumRefundableSet = MoneyBag::fromArray($data['maximumRefundableSet']);
            }
            if (isset($data['tax']) && $data['tax'] !== null) {
                $instance->tax = $data['tax'];
            }
            if (isset($data['taxSet']) && $data['taxSet'] !== null) {
                $instance->taxSet = MoneyBag::fromArray($data['taxSet']);
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
