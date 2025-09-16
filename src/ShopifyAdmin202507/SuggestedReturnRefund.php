<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\RefundDuty;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShippingRefund;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SuggestedOrderTransaction;

class SuggestedReturnRefund
{
    protected $amount;
    protected $discountedSubtotal;
    protected $maximumRefundable;
    protected $refundDuties;
    protected $shipping;
    protected $subtotal;
    protected $suggestedTransactions;
    protected $totalCartDiscountAmount;
    protected $totalDuties;
    protected $totalTax;

    
    /**
     * @return MoneyBag
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return MoneyBag
     */
    public function getDiscountedSubtotal()
    {
        return $this->discountedSubtotal;
    }

    
    /**
     * @return MoneyBag
     */
    public function getMaximumRefundable()
    {
        return $this->maximumRefundable;
    }

    
    /**
     * @return RefundDuty[]
     */
    public function getRefundDuties()
    {
        return $this->refundDuties;
    }

    
    /**
     * @return ShippingRefund
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    
    /**
     * @return MoneyBag
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    
    /**
     * @return SuggestedOrderTransaction[]
     */
    public function getSuggestedTransactions()
    {
        return $this->suggestedTransactions;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalCartDiscountAmount()
    {
        return $this->totalCartDiscountAmount;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalDuties()
    {
        return $this->totalDuties;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = MoneyBag::fromArray($data['amount']);
            }
            if (isset($data['discountedSubtotal']) && $data['discountedSubtotal'] !== null) {
                $instance->discountedSubtotal = MoneyBag::fromArray($data['discountedSubtotal']);
            }
            if (isset($data['maximumRefundable']) && $data['maximumRefundable'] !== null) {
                $instance->maximumRefundable = MoneyBag::fromArray($data['maximumRefundable']);
            }
            if (isset($data['refundDuties']) && $data['refundDuties'] !== null) {
                $instance->refundDuties = array_map(function($item) { return RefundDuty::fromArray($item); }, $data['refundDuties']);
            }
            if (isset($data['shipping']) && $data['shipping'] !== null) {
                $instance->shipping = ShippingRefund::fromArray($data['shipping']);
            }
            if (isset($data['subtotal']) && $data['subtotal'] !== null) {
                $instance->subtotal = MoneyBag::fromArray($data['subtotal']);
            }
            if (isset($data['suggestedTransactions']) && $data['suggestedTransactions'] !== null) {
                $instance->suggestedTransactions = array_map(function($item) { return SuggestedOrderTransaction::fromArray($item); }, $data['suggestedTransactions']);
            }
            if (isset($data['totalCartDiscountAmount']) && $data['totalCartDiscountAmount'] !== null) {
                $instance->totalCartDiscountAmount = MoneyBag::fromArray($data['totalCartDiscountAmount']);
            }
            if (isset($data['totalDuties']) && $data['totalDuties'] !== null) {
                $instance->totalDuties = MoneyBag::fromArray($data['totalDuties']);
            }
            if (isset($data['totalTax']) && $data['totalTax'] !== null) {
                $instance->totalTax = MoneyBag::fromArray($data['totalTax']);
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
            if ($this->discountedSubtotal !== null) {
                $data['discountedSubtotal'] = $this->discountedSubtotal->asArray();
            }
            if ($this->maximumRefundable !== null) {
                $data['maximumRefundable'] = $this->maximumRefundable->asArray();
            }
            if ($this->refundDuties !== null) {
                $data['refundDuties'] = array_map(function($item) { return $item->asArray(); }, $this->refundDuties);
            }
            if ($this->shipping !== null) {
                $data['shipping'] = $this->shipping->asArray();
            }
            if ($this->subtotal !== null) {
                $data['subtotal'] = $this->subtotal->asArray();
            }
            if ($this->suggestedTransactions !== null) {
                $data['suggestedTransactions'] = array_map(function($item) { return $item->asArray(); }, $this->suggestedTransactions);
            }
            if ($this->totalCartDiscountAmount !== null) {
                $data['totalCartDiscountAmount'] = $this->totalCartDiscountAmount->asArray();
            }
            if ($this->totalDuties !== null) {
                $data['totalDuties'] = $this->totalDuties->asArray();
            }
            if ($this->totalTax !== null) {
                $data['totalTax'] = $this->totalTax->asArray();
            }
            return $data;
        }
}
