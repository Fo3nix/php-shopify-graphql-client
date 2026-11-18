<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyExchangeV2LineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyTaxLine;

/**
 * Return items associated to the exchange.
 */
class ShopifyExchangeV2Returns
{
    protected $lineItems;
    protected $orderDiscountAmountSet;
    protected $shippingRefundAmountSet;
    protected $subtotalPriceSet;
    protected $taxLines;
    protected $tipRefundAmountSet;
    protected $totalPriceSet;

    
    /**
     * The list of return items for the exchange.
     *
     * @return ShopifyExchangeV2LineItem[]
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    
    /**
     * The amount of the order-level discount for the items and shipping being returned, which doesn't contain any line item discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getOrderDiscountAmountSet(): ?ShopifyMoneyBag
    {
        return $this->orderDiscountAmountSet;
    }

    
    /**
     * The amount of money to be refunded for shipping.
     *
     * @return ShopifyMoneyBag
     */
    public function getShippingRefundAmountSet(): ?ShopifyMoneyBag
    {
        return $this->shippingRefundAmountSet;
    }

    
    /**
     * The subtotal of the items being returned.
     *
     * @return ShopifyMoneyBag
     */
    public function getSubtotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->subtotalPriceSet;
    }

    
    /**
     * The summary of all taxes of the items being returned.
     *
     * @return ShopifyTaxLine[]
     */
    public function getTaxLines(): ?array
    {
        return $this->taxLines;
    }

    
    /**
     * The amount of money to be refunded for tip.
     *
     * @return ShopifyMoneyBag
     */
    public function getTipRefundAmountSet(): ?ShopifyMoneyBag
    {
        return $this->tipRefundAmountSet;
    }

    
    /**
     * The total value of the items being returned.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->totalPriceSet;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = array_map(function($item) { return ShopifyExchangeV2LineItem::fromArray($item); }, $data['lineItems']);
            }
            if (isset($data['orderDiscountAmountSet']) && $data['orderDiscountAmountSet'] !== null) {
                $instance->orderDiscountAmountSet = ShopifyMoneyBag::fromArray($data['orderDiscountAmountSet']);
            }
            if (isset($data['shippingRefundAmountSet']) && $data['shippingRefundAmountSet'] !== null) {
                $instance->shippingRefundAmountSet = ShopifyMoneyBag::fromArray($data['shippingRefundAmountSet']);
            }
            if (isset($data['subtotalPriceSet']) && $data['subtotalPriceSet'] !== null) {
                $instance->subtotalPriceSet = ShopifyMoneyBag::fromArray($data['subtotalPriceSet']);
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return ShopifyTaxLine::fromArray($item); }, $data['taxLines']);
            }
            if (isset($data['tipRefundAmountSet']) && $data['tipRefundAmountSet'] !== null) {
                $instance->tipRefundAmountSet = ShopifyMoneyBag::fromArray($data['tipRefundAmountSet']);
            }
            if (isset($data['totalPriceSet']) && $data['totalPriceSet'] !== null) {
                $instance->totalPriceSet = ShopifyMoneyBag::fromArray($data['totalPriceSet']);
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
            if ($this->lineItems !== null) {
                $data['lineItems'] = array_map(function($item) { return $item->asArray(); }, $this->lineItems);
            }
            if ($this->orderDiscountAmountSet !== null) {
                $data['orderDiscountAmountSet'] = $this->orderDiscountAmountSet->asArray();
            }
            if ($this->shippingRefundAmountSet !== null) {
                $data['shippingRefundAmountSet'] = $this->shippingRefundAmountSet->asArray();
            }
            if ($this->subtotalPriceSet !== null) {
                $data['subtotalPriceSet'] = $this->subtotalPriceSet->asArray();
            }
            if ($this->taxLines !== null) {
                $data['taxLines'] = array_map(function($item) { return $item->asArray(); }, $this->taxLines);
            }
            if ($this->tipRefundAmountSet !== null) {
                $data['tipRefundAmountSet'] = $this->tipRefundAmountSet->asArray();
            }
            if ($this->totalPriceSet !== null) {
                $data['totalPriceSet'] = $this->totalPriceSet->asArray();
            }
            return $data;
        }
}
