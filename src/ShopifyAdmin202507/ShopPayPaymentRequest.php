<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopPayPaymentRequestDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopPayPaymentRequestLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopPayPaymentRequestContactField;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopPayPaymentRequestShippingLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopPayPaymentRequestTotalShippingPrice;

class ShopPayPaymentRequest
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
     * @return ShopPayPaymentRequestDiscount[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    
    /**
     * @return ShopPayPaymentRequestLineItem[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return CurrencyCodeEnumObject
     */
    public function getPresentmentCurrency()
    {
        return $this->presentmentCurrency;
    }

    
    /**
     * @return ShopPayPaymentRequestDeliveryMethodTypeEnumObject
     */
    public function getSelectedDeliveryMethodType()
    {
        return $this->selectedDeliveryMethodType;
    }

    
    /**
     * @return ShopPayPaymentRequestContactField
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    
    /**
     * @return ShopPayPaymentRequestShippingLine[]
     */
    public function getShippingLines()
    {
        return $this->shippingLines;
    }

    
    /**
     * @return MoneyV2
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    
    /**
     * @return MoneyV2
     */
    public function getTotal()
    {
        return $this->total;
    }

    
    /**
     * @return ShopPayPaymentRequestTotalShippingPrice
     */
    public function getTotalShippingPrice()
    {
        return $this->totalShippingPrice;
    }

    
    /**
     * @return MoneyV2
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
                $instance->discounts = array_map(function($item) { return ShopPayPaymentRequestDiscount::fromArray($item); }, $data['discounts']);
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = array_map(function($item) { return ShopPayPaymentRequestLineItem::fromArray($item); }, $data['lineItems']);
            }
            if (isset($data['presentmentCurrency']) && $data['presentmentCurrency'] !== null) {
                $instance->presentmentCurrency = $data['presentmentCurrency'];
            }
            if (isset($data['selectedDeliveryMethodType']) && $data['selectedDeliveryMethodType'] !== null) {
                $instance->selectedDeliveryMethodType = $data['selectedDeliveryMethodType'];
            }
            if (isset($data['shippingAddress']) && $data['shippingAddress'] !== null) {
                $instance->shippingAddress = ShopPayPaymentRequestContactField::fromArray($data['shippingAddress']);
            }
            if (isset($data['shippingLines']) && $data['shippingLines'] !== null) {
                $instance->shippingLines = array_map(function($item) { return ShopPayPaymentRequestShippingLine::fromArray($item); }, $data['shippingLines']);
            }
            if (isset($data['subtotal']) && $data['subtotal'] !== null) {
                $instance->subtotal = MoneyV2::fromArray($data['subtotal']);
            }
            if (isset($data['total']) && $data['total'] !== null) {
                $instance->total = MoneyV2::fromArray($data['total']);
            }
            if (isset($data['totalShippingPrice']) && $data['totalShippingPrice'] !== null) {
                $instance->totalShippingPrice = ShopPayPaymentRequestTotalShippingPrice::fromArray($data['totalShippingPrice']);
            }
            if (isset($data['totalTax']) && $data['totalTax'] !== null) {
                $instance->totalTax = MoneyV2::fromArray($data['totalTax']);
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
