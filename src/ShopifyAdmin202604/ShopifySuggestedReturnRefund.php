<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyRefundDuty;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShippingRefund;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySuggestedOrderTransaction;

/**
 * Represents a return refund suggested by Shopify based on the items being reimbursed. You can then use the suggested refund object to generate an actual refund for the return.
 */
class ShopifySuggestedReturnRefund
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
     * The total monetary value to be refunded in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmount(): ?ShopifyMoneyBag
    {
        return $this->amount;
    }

    
    /**
     * The sum of all the discounted prices of the line items being refunded.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedSubtotal(): ?ShopifyMoneyBag
    {
        return $this->discountedSubtotal;
    }

    
    /**
     * The total monetary value available to refund in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getMaximumRefundable(): ?ShopifyMoneyBag
    {
        return $this->maximumRefundable;
    }

    
    /**
     * A list of duties to be refunded from the order.
     *
     * @return ShopifyRefundDuty[]
     */
    public function getRefundDuties(): ?array
    {
        return $this->refundDuties;
    }

    
    /**
     * The shipping costs to be refunded from the order.
     *
     * @return ShopifyShippingRefund
     */
    public function getShipping(): ?ShopifyShippingRefund
    {
        return $this->shipping;
    }

    
    /**
     * The sum of all the prices of the line items being refunded in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getSubtotal(): ?ShopifyMoneyBag
    {
        return $this->subtotal;
    }

    
    /**
     * A list of suggested order transactions.
     *
     * @return ShopifySuggestedOrderTransaction[]
     */
    public function getSuggestedTransactions(): ?array
    {
        return $this->suggestedTransactions;
    }

    
    /**
     * The total cart discount amount that was applied to all line items in this refund.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalCartDiscountAmount(): ?ShopifyMoneyBag
    {
        return $this->totalCartDiscountAmount;
    }

    
    /**
     * The sum of all the duties being refunded from the order in shop and presentment currencies. The value must be positive.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalDuties(): ?ShopifyMoneyBag
    {
        return $this->totalDuties;
    }

    
    /**
     * The sum of the taxes being refunded in shop and presentment currencies. The value must be positive.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalTax(): ?ShopifyMoneyBag
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
                $instance->amount = ShopifyMoneyBag::fromArray($data['amount']);
            }
            if (isset($data['discountedSubtotal']) && $data['discountedSubtotal'] !== null) {
                $instance->discountedSubtotal = ShopifyMoneyBag::fromArray($data['discountedSubtotal']);
            }
            if (isset($data['maximumRefundable']) && $data['maximumRefundable'] !== null) {
                $instance->maximumRefundable = ShopifyMoneyBag::fromArray($data['maximumRefundable']);
            }
            if (isset($data['refundDuties']) && $data['refundDuties'] !== null) {
                $instance->refundDuties = array_map(function($item) { return ShopifyRefundDuty::fromArray($item); }, $data['refundDuties']);
            }
            if (isset($data['shipping']) && $data['shipping'] !== null) {
                $instance->shipping = ShopifyShippingRefund::fromArray($data['shipping']);
            }
            if (isset($data['subtotal']) && $data['subtotal'] !== null) {
                $instance->subtotal = ShopifyMoneyBag::fromArray($data['subtotal']);
            }
            if (isset($data['suggestedTransactions']) && $data['suggestedTransactions'] !== null) {
                $instance->suggestedTransactions = array_map(function($item) { return ShopifySuggestedOrderTransaction::fromArray($item); }, $data['suggestedTransactions']);
            }
            if (isset($data['totalCartDiscountAmount']) && $data['totalCartDiscountAmount'] !== null) {
                $instance->totalCartDiscountAmount = ShopifyMoneyBag::fromArray($data['totalCartDiscountAmount']);
            }
            if (isset($data['totalDuties']) && $data['totalDuties'] !== null) {
                $instance->totalDuties = ShopifyMoneyBag::fromArray($data['totalDuties']);
            }
            if (isset($data['totalTax']) && $data['totalTax'] !== null) {
                $instance->totalTax = ShopifyMoneyBag::fromArray($data['totalTax']);
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
