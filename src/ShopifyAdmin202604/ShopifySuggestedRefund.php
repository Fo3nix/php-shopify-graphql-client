<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyRefundDuty;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyRefundLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShippingRefund;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySuggestedOrderTransaction;

class ShopifySuggestedRefund
{
    protected $amount;
    protected $amountSet;
    protected $discountedSubtotalSet;
    protected $maximumRefundable;
    protected $maximumRefundableSet;
    protected $refundDuties;
    protected $refundLineItems;
    protected $shipping;
    protected $subtotal;
    protected $subtotalSet;
    protected $suggestedRefundMethods;
    protected $suggestedTransactions;
    protected $totalCartDiscountAmountSet;
    protected $totalDutiesSet;
    protected $totalTaxSet;
    protected $totalTaxes;

    
    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getAmountSet()
    {
        return $this->amountSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getDiscountedSubtotalSet()
    {
        return $this->discountedSubtotalSet;
    }

    
    /**
     * @return string
     */
    public function getMaximumRefundable()
    {
        return $this->maximumRefundable;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getMaximumRefundableSet()
    {
        return $this->maximumRefundableSet;
    }

    
    /**
     * @return ShopifyRefundDuty[]
     */
    public function getRefundDuties()
    {
        return $this->refundDuties;
    }

    
    /**
     * @return ShopifyRefundLineItem[]
     */
    public function getRefundLineItems()
    {
        return $this->refundLineItems;
    }

    
    /**
     * @return ShopifyShippingRefund
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    
    /**
     * @return string
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getSubtotalSet()
    {
        return $this->subtotalSet;
    }

    
    /**
     * @return mixed[]
     */
    public function getSuggestedRefundMethods()
    {
        return $this->suggestedRefundMethods;
    }

    
    /**
     * @return ShopifySuggestedOrderTransaction[]
     */
    public function getSuggestedTransactions()
    {
        return $this->suggestedTransactions;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalCartDiscountAmountSet()
    {
        return $this->totalCartDiscountAmountSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalDutiesSet()
    {
        return $this->totalDutiesSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalTaxSet()
    {
        return $this->totalTaxSet;
    }

    
    /**
     * @return string
     */
    public function getTotalTaxes()
    {
        return $this->totalTaxes;
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
            if (isset($data['discountedSubtotalSet']) && $data['discountedSubtotalSet'] !== null) {
                $instance->discountedSubtotalSet = ShopifyMoneyBag::fromArray($data['discountedSubtotalSet']);
            }
            if (isset($data['maximumRefundable']) && $data['maximumRefundable'] !== null) {
                $instance->maximumRefundable = $data['maximumRefundable'];
            }
            if (isset($data['maximumRefundableSet']) && $data['maximumRefundableSet'] !== null) {
                $instance->maximumRefundableSet = ShopifyMoneyBag::fromArray($data['maximumRefundableSet']);
            }
            if (isset($data['refundDuties']) && $data['refundDuties'] !== null) {
                $instance->refundDuties = array_map(function($item) { return ShopifyRefundDuty::fromArray($item); }, $data['refundDuties']);
            }
            if (isset($data['refundLineItems']) && $data['refundLineItems'] !== null) {
                $instance->refundLineItems = array_map(function($item) { return ShopifyRefundLineItem::fromArray($item); }, $data['refundLineItems']);
            }
            if (isset($data['shipping']) && $data['shipping'] !== null) {
                $instance->shipping = ShopifyShippingRefund::fromArray($data['shipping']);
            }
            if (isset($data['subtotal']) && $data['subtotal'] !== null) {
                $instance->subtotal = $data['subtotal'];
            }
            if (isset($data['subtotalSet']) && $data['subtotalSet'] !== null) {
                $instance->subtotalSet = ShopifyMoneyBag::fromArray($data['subtotalSet']);
            }
            if (isset($data['suggestedRefundMethods']) && $data['suggestedRefundMethods'] !== null) {
                $instance->suggestedRefundMethods = $data['suggestedRefundMethods'];
            }
            if (isset($data['suggestedTransactions']) && $data['suggestedTransactions'] !== null) {
                $instance->suggestedTransactions = array_map(function($item) { return ShopifySuggestedOrderTransaction::fromArray($item); }, $data['suggestedTransactions']);
            }
            if (isset($data['totalCartDiscountAmountSet']) && $data['totalCartDiscountAmountSet'] !== null) {
                $instance->totalCartDiscountAmountSet = ShopifyMoneyBag::fromArray($data['totalCartDiscountAmountSet']);
            }
            if (isset($data['totalDutiesSet']) && $data['totalDutiesSet'] !== null) {
                $instance->totalDutiesSet = ShopifyMoneyBag::fromArray($data['totalDutiesSet']);
            }
            if (isset($data['totalTaxSet']) && $data['totalTaxSet'] !== null) {
                $instance->totalTaxSet = ShopifyMoneyBag::fromArray($data['totalTaxSet']);
            }
            if (isset($data['totalTaxes']) && $data['totalTaxes'] !== null) {
                $instance->totalTaxes = $data['totalTaxes'];
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
            if ($this->discountedSubtotalSet !== null) {
                $data['discountedSubtotalSet'] = $this->discountedSubtotalSet->asArray();
            }
            if ($this->maximumRefundable !== null) {
                $data['maximumRefundable'] = $this->maximumRefundable;
            }
            if ($this->maximumRefundableSet !== null) {
                $data['maximumRefundableSet'] = $this->maximumRefundableSet->asArray();
            }
            if ($this->refundDuties !== null) {
                $data['refundDuties'] = array_map(function($item) { return $item->asArray(); }, $this->refundDuties);
            }
            if ($this->refundLineItems !== null) {
                $data['refundLineItems'] = array_map(function($item) { return $item->asArray(); }, $this->refundLineItems);
            }
            if ($this->shipping !== null) {
                $data['shipping'] = $this->shipping->asArray();
            }
            if ($this->subtotal !== null) {
                $data['subtotal'] = $this->subtotal;
            }
            if ($this->subtotalSet !== null) {
                $data['subtotalSet'] = $this->subtotalSet->asArray();
            }
            if ($this->suggestedRefundMethods !== null) {
                $data['suggestedRefundMethods'] = $this->suggestedRefundMethods;
            }
            if ($this->suggestedTransactions !== null) {
                $data['suggestedTransactions'] = array_map(function($item) { return $item->asArray(); }, $this->suggestedTransactions);
            }
            if ($this->totalCartDiscountAmountSet !== null) {
                $data['totalCartDiscountAmountSet'] = $this->totalCartDiscountAmountSet->asArray();
            }
            if ($this->totalDutiesSet !== null) {
                $data['totalDutiesSet'] = $this->totalDutiesSet->asArray();
            }
            if ($this->totalTaxSet !== null) {
                $data['totalTaxSet'] = $this->totalTaxSet->asArray();
            }
            if ($this->totalTaxes !== null) {
                $data['totalTaxes'] = $this->totalTaxes;
            }
            return $data;
        }
}
