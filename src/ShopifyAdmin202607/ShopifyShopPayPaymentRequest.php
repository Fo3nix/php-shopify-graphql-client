<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopPayPaymentRequestDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopPayPaymentRequestLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopPayPaymentRequestContactField;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopPayPaymentRequestShippingLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopPayPaymentRequestTotalShippingPrice;

class ShopifyShopPayPaymentRequest
{
    protected $discounts;
    protected $lineItems;
    protected $presentmentCurrency;
    protected $selectedDeliveryMethodType;
    protected $shippingAddress;
    protected $shippingLines;
    protected $subtotal;
    protected $total;
    protected $totalShippingPrice;
    protected $totalTax;

    
    /**
     * @return ShopifyShopPayPaymentRequestDiscount[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    
    /**
     * @return ShopifyShopPayPaymentRequestLineItem[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return ShopifyCurrencyCodeEnumObject
     */
    public function getPresentmentCurrency()
    {
        return $this->presentmentCurrency;
    }

    
    /**
     * @return ShopifyShopPayPaymentRequestDeliveryMethodTypeEnumObject
     */
    public function getSelectedDeliveryMethodType()
    {
        return $this->selectedDeliveryMethodType;
    }

    
    /**
     * @return ShopifyShopPayPaymentRequestContactField
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    
    /**
     * @return ShopifyShopPayPaymentRequestShippingLine[]
     */
    public function getShippingLines()
    {
        return $this->shippingLines;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotal()
    {
        return $this->total;
    }

    
    /**
     * @return ShopifyShopPayPaymentRequestTotalShippingPrice
     */
    public function getTotalShippingPrice()
    {
        return $this->totalShippingPrice;
    }

    
    /**
     * @return ShopifyMoneyV2
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
            if (isset($data['discounts']) && $data['discounts'] !== null) {
                $instance->discounts = array_map(function($item) { return ShopifyShopPayPaymentRequestDiscount::fromArray($item); }, $data['discounts']);
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = array_map(function($item) { return ShopifyShopPayPaymentRequestLineItem::fromArray($item); }, $data['lineItems']);
            }
            if (isset($data['presentmentCurrency']) && $data['presentmentCurrency'] !== null) {
                $instance->presentmentCurrency = $data['presentmentCurrency'];
            }
            if (isset($data['selectedDeliveryMethodType']) && $data['selectedDeliveryMethodType'] !== null) {
                $instance->selectedDeliveryMethodType = $data['selectedDeliveryMethodType'];
            }
            if (isset($data['shippingAddress']) && $data['shippingAddress'] !== null) {
                $instance->shippingAddress = ShopifyShopPayPaymentRequestContactField::fromArray($data['shippingAddress']);
            }
            if (isset($data['shippingLines']) && $data['shippingLines'] !== null) {
                $instance->shippingLines = array_map(function($item) { return ShopifyShopPayPaymentRequestShippingLine::fromArray($item); }, $data['shippingLines']);
            }
            if (isset($data['subtotal']) && $data['subtotal'] !== null) {
                $instance->subtotal = ShopifyMoneyV2::fromArray($data['subtotal']);
            }
            if (isset($data['total']) && $data['total'] !== null) {
                $instance->total = ShopifyMoneyV2::fromArray($data['total']);
            }
            if (isset($data['totalShippingPrice']) && $data['totalShippingPrice'] !== null) {
                $instance->totalShippingPrice = ShopifyShopPayPaymentRequestTotalShippingPrice::fromArray($data['totalShippingPrice']);
            }
            if (isset($data['totalTax']) && $data['totalTax'] !== null) {
                $instance->totalTax = ShopifyMoneyV2::fromArray($data['totalTax']);
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
            if ($this->discounts !== null) {
                $data['discounts'] = array_map(function($item) { return $item->asArray(); }, $this->discounts);
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = array_map(function($item) { return $item->asArray(); }, $this->lineItems);
            }
            if ($this->presentmentCurrency !== null) {
                $data['presentmentCurrency'] = $this->presentmentCurrency;
            }
            if ($this->selectedDeliveryMethodType !== null) {
                $data['selectedDeliveryMethodType'] = $this->selectedDeliveryMethodType;
            }
            if ($this->shippingAddress !== null) {
                $data['shippingAddress'] = $this->shippingAddress->asArray();
            }
            if ($this->shippingLines !== null) {
                $data['shippingLines'] = array_map(function($item) { return $item->asArray(); }, $this->shippingLines);
            }
            if ($this->subtotal !== null) {
                $data['subtotal'] = $this->subtotal->asArray();
            }
            if ($this->total !== null) {
                $data['total'] = $this->total->asArray();
            }
            if ($this->totalShippingPrice !== null) {
                $data['totalShippingPrice'] = $this->totalShippingPrice->asArray();
            }
            if ($this->totalTax !== null) {
                $data['totalTax'] = $this->totalTax->asArray();
            }
            return $data;
        }
}
