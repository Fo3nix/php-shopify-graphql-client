<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyRefundDuty;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyRefundLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyShippingRefund;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySuggestedRefundMethodHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySuggestedRefundMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySuggestedOrderTransaction;

/**
 * A refund amount that Shopify suggests based on the items, duties, and shipping costs that customers return. Provides a breakdown of all monetary values including subtotals, taxes, discounts, and the maximum refundable amount.
 *
 * The suggested refund includes [`RefundLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RefundLineItem) objects to refund with their quantities and restock instructions, [`RefundDuty`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RefundDuty) objects for duty reimbursements, and [`ShippingRefund`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShippingRefund) for shipping cost refunds. Provides [`SuggestedOrderTransaction`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SuggestedOrderTransaction) objects and the [`SuggestedRefundMethod`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/SuggestedRefundMethod) interface to process the refund through the appropriate gateways.
 *
 * Learn more about [previewing and refunding duties](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/view-and-refund-duties#step-3-preview-a-refund-that-includes-duties).
 */
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
     * The total monetary value to be refunded.
     *
     * @return string
     */
    public function getAmount(): mixed
    {
        return $this->amount;
    }

    
    /**
     * The total monetary value to be refunded in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmountSet(): ?ShopifyMoneyBag
    {
        return $this->amountSet;
    }

    
    /**
     * The sum of all the discounted prices of the line items being refunded.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedSubtotalSet(): ?ShopifyMoneyBag
    {
        return $this->discountedSubtotalSet;
    }

    
    /**
     * The total monetary value available to refund.
     *
     * @return string
     */
    public function getMaximumRefundable(): mixed
    {
        return $this->maximumRefundable;
    }

    
    /**
     * The total monetary value available to refund in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getMaximumRefundableSet(): ?ShopifyMoneyBag
    {
        return $this->maximumRefundableSet;
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
     * A list of line items to be refunded, along with restock instructions.
     *
     * @return ShopifyRefundLineItem[]
     */
    public function getRefundLineItems(): ?array
    {
        return $this->refundLineItems;
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
     * The sum of all the prices of the line items being refunded.
     *
     * @return string
     */
    public function getSubtotal(): mixed
    {
        return $this->subtotal;
    }

    
    /**
     * The sum of all the prices of the line items being refunded in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getSubtotalSet(): ?ShopifyMoneyBag
    {
        return $this->subtotalSet;
    }

    
    /**
     * A list of suggested refund methods.
     *
     * @return ShopifySuggestedRefundMethod[]
     */
    public function getSuggestedRefundMethods(): ?array
    {
        return $this->suggestedRefundMethods;
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
    public function getTotalCartDiscountAmountSet(): ?ShopifyMoneyBag
    {
        return $this->totalCartDiscountAmountSet;
    }

    
    /**
     * The sum of all the duties being refunded from the order in shop and presentment currencies. The value must be positive.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalDutiesSet(): ?ShopifyMoneyBag
    {
        return $this->totalDutiesSet;
    }

    
    /**
     * The sum of the taxes being refunded from the order in shop and presentment currencies. The value must be positive.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalTaxSet(): ?ShopifyMoneyBag
    {
        return $this->totalTaxSet;
    }

    
    /**
     * The sum of the taxes being refunded from the order. The value must be positive.
     *
     * @return string
     */
    public function getTotalTaxes(): mixed
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
                $instance->suggestedRefundMethods = array_map(function($item) { return ShopifySuggestedRefundMethodHydrator::fromArray($item); }, $data['suggestedRefundMethods']);
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
                $data['suggestedRefundMethods'] = array_map(function($item) { return ShopifySuggestedRefundMethodHydrator::toArray($item); }, $this->suggestedRefundMethods);
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
