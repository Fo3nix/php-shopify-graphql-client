<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopPayPaymentRequestDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopPayPaymentRequestLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopPayPaymentRequestContactField;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopPayPaymentRequestShippingLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopPayPaymentRequestTotalShippingPrice;

/**
 * Represents a Shop Pay payment request.
 */
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
     * The discounts for the payment request order.
     *
     * @return ShopifyShopPayPaymentRequestDiscount[]
     */
    public function getDiscounts(): ?array
    {
        return $this->discounts;
    }

    
    /**
     * The line items for the payment request.
     *
     * @return ShopifyShopPayPaymentRequestLineItem[]
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    
    /**
     * The presentment currency for the payment request.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getPresentmentCurrency(): ?string
    {
        return $this->presentmentCurrency;
    }

    
    /**
     * The delivery method type for the payment request.
     *
     * @return string A ShopifyShopPayPaymentRequestDeliveryMethodTypeEnumObject value
     */
    public function getSelectedDeliveryMethodType(): ?string
    {
        return $this->selectedDeliveryMethodType;
    }

    
    /**
     * The shipping address for the payment request.
     *
     * @return ShopifyShopPayPaymentRequestContactField
     */
    public function getShippingAddress(): ?ShopifyShopPayPaymentRequestContactField
    {
        return $this->shippingAddress;
    }

    
    /**
     * The shipping lines for the payment request.
     *
     * @return ShopifyShopPayPaymentRequestShippingLine[]
     */
    public function getShippingLines(): ?array
    {
        return $this->shippingLines;
    }

    
    /**
     * The subtotal amount for the payment request.
     *
     * @return ShopifyMoneyV2
     */
    public function getSubtotal(): ?ShopifyMoneyV2
    {
        return $this->subtotal;
    }

    
    /**
     * The total amount for the payment request.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotal(): ?ShopifyMoneyV2
    {
        return $this->total;
    }

    
    /**
     * The total shipping price for the payment request.
     *
     * @return ShopifyShopPayPaymentRequestTotalShippingPrice
     */
    public function getTotalShippingPrice(): ?ShopifyShopPayPaymentRequestTotalShippingPrice
    {
        return $this->totalShippingPrice;
    }

    
    /**
     * The total tax for the payment request.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalTax(): ?ShopifyMoneyV2
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
