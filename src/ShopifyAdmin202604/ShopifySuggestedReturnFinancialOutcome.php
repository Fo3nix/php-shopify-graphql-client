<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyReturnOutcomeFinancialTransferHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyRefundDuty;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShippingRefund;

/**
 * Represents a return financial outcome suggested by Shopify based on the items being reimbursed. You can then use the suggested outcome object to generate an actual refund or invoice for the return.
 */
class ShopifySuggestedReturnFinancialOutcome
{
    protected $discountedSubtotal;
    protected $financialTransfer;
    protected $maximumRefundable;
    protected $refundDuties;
    protected $shipping;
    protected $totalAdditionalFees;
    protected $totalCartDiscountAmount;
    protected $totalDuties;
    protected $totalTax;

    
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
     * The financial transfer details for the return outcome.
     *
     * @return ShopifyInvoiceReturnOutcome|ShopifyRefundReturnOutcome
     */
    public function getFinancialTransfer(): ShopifyInvoiceReturnOutcome|ShopifyRefundReturnOutcome|null
    {
        return $this->financialTransfer;
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
     * The sum of all the additional fees being refunded in shop and presentment currencies. The value must be positive.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalAdditionalFees(): ?ShopifyMoneyBag
    {
        return $this->totalAdditionalFees;
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
            if (isset($data['discountedSubtotal']) && $data['discountedSubtotal'] !== null) {
                $instance->discountedSubtotal = ShopifyMoneyBag::fromArray($data['discountedSubtotal']);
            }
            if (isset($data['financialTransfer']) && $data['financialTransfer'] !== null) {
                $instance->financialTransfer = ShopifyReturnOutcomeFinancialTransferHydrator::fromArray($data['financialTransfer']);
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
            if (isset($data['totalAdditionalFees']) && $data['totalAdditionalFees'] !== null) {
                $instance->totalAdditionalFees = ShopifyMoneyBag::fromArray($data['totalAdditionalFees']);
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
            if ($this->discountedSubtotal !== null) {
                $data['discountedSubtotal'] = $this->discountedSubtotal->asArray();
            }
            if ($this->financialTransfer !== null) {
                $data['financialTransfer'] = ShopifyReturnOutcomeFinancialTransferHydrator::toArray($this->financialTransfer);
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
            if ($this->totalAdditionalFees !== null) {
                $data['totalAdditionalFees'] = $this->totalAdditionalFees->asArray();
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
