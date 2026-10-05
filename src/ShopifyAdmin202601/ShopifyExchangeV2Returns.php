<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyExchangeV2LineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTaxLine;

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
     * @return ShopifyExchangeV2LineItem[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getOrderDiscountAmountSet()
    {
        return $this->orderDiscountAmountSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getShippingRefundAmountSet()
    {
        return $this->shippingRefundAmountSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getSubtotalPriceSet()
    {
        return $this->subtotalPriceSet;
    }

    
    /**
     * @return ShopifyTaxLine[]
     */
    public function getTaxLines()
    {
        return $this->taxLines;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTipRefundAmountSet()
    {
        return $this->tipRefundAmountSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalPriceSet()
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
