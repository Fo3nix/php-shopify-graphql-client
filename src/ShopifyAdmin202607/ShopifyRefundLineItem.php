<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;

/**
 * A [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) or [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) being refunded from an order. Each refund line item tracks the quantity, pricing, and restocking details for items returned to the merchant.
 *
 * The refund line item links to the original [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) from the [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) and includes financial information such as the refunded price, subtotal, and taxes in both shop and presentment currencies. The [`restockType`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RefundLineItem#field-RefundLineItem.fields.restockType) field indicates whether and how the merchant restocks the returned items to inventory, while the [`location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RefundLineItem#field-RefundLineItem.fields.location) field specifies where restocking occurs.
 */
class ShopifyRefundLineItem
{
    protected $id;
    protected $lineItem;
    protected $location;
    protected $price;
    protected $priceSet;
    protected $quantity;
    protected $restockType;
    protected $restocked;
    protected $subtotal;
    protected $subtotalSet;
    protected $totalTax;
    protected $totalTaxSet;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The `LineItem` resource associated to the refunded line item.
     *
     * @return ShopifyLineItem
     */
    public function getLineItem(): ?ShopifyLineItem
    {
        return $this->lineItem;
    }

    
    /**
     * The inventory restock location.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * The price of a refunded line item.
     *
     * @return string
     */
    public function getPrice(): mixed
    {
        return $this->price;
    }

    
    /**
     * The price of a refunded line item in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getPriceSet(): ?ShopifyMoneyBag
    {
        return $this->priceSet;
    }

    
    /**
     * The quantity of a refunded line item.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * The type of restock for the refunded line item.
     *
     * @return string A ShopifyRefundLineItemRestockTypeEnumObject value
     */
    public function getRestockType(): ?string
    {
        return $this->restockType;
    }

    
    /**
     * Whether the refunded line item was restocked. Not applicable in the context of a SuggestedRefund.
     *
     * @return bool
     */
    public function getRestocked(): ?bool
    {
        return $this->restocked;
    }

    
    /**
     * The subtotal price of a refunded line item.
     *
     * @return string
     */
    public function getSubtotal(): mixed
    {
        return $this->subtotal;
    }

    
    /**
     * The subtotal price of a refunded line item in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getSubtotalSet(): ?ShopifyMoneyBag
    {
        return $this->subtotalSet;
    }

    
    /**
     * The total tax charged on a refunded line item.
     *
     * @return string
     */
    public function getTotalTax(): mixed
    {
        return $this->totalTax;
    }

    
    /**
     * The total tax charged on a refunded line item in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalTaxSet(): ?ShopifyMoneyBag
    {
        return $this->totalTaxSet;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineItem']) && $data['lineItem'] !== null) {
                $instance->lineItem = ShopifyLineItem::fromArray($data['lineItem']);
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = $data['price'];
            }
            if (isset($data['priceSet']) && $data['priceSet'] !== null) {
                $instance->priceSet = ShopifyMoneyBag::fromArray($data['priceSet']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['restockType']) && $data['restockType'] !== null) {
                $instance->restockType = $data['restockType'];
            }
            if (isset($data['restocked']) && $data['restocked'] !== null) {
                $instance->restocked = $data['restocked'];
            }
            if (isset($data['subtotal']) && $data['subtotal'] !== null) {
                $instance->subtotal = $data['subtotal'];
            }
            if (isset($data['subtotalSet']) && $data['subtotalSet'] !== null) {
                $instance->subtotalSet = ShopifyMoneyBag::fromArray($data['subtotalSet']);
            }
            if (isset($data['totalTax']) && $data['totalTax'] !== null) {
                $instance->totalTax = $data['totalTax'];
            }
            if (isset($data['totalTaxSet']) && $data['totalTaxSet'] !== null) {
                $instance->totalTaxSet = ShopifyMoneyBag::fromArray($data['totalTaxSet']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lineItem !== null) {
                $data['lineItem'] = $this->lineItem->asArray();
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->price !== null) {
                $data['price'] = $this->price;
            }
            if ($this->priceSet !== null) {
                $data['priceSet'] = $this->priceSet->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->restockType !== null) {
                $data['restockType'] = $this->restockType;
            }
            if ($this->restocked !== null) {
                $data['restocked'] = $this->restocked;
            }
            if ($this->subtotal !== null) {
                $data['subtotal'] = $this->subtotal;
            }
            if ($this->subtotalSet !== null) {
                $data['subtotalSet'] = $this->subtotalSet->asArray();
            }
            if ($this->totalTax !== null) {
                $data['totalTax'] = $this->totalTax;
            }
            if ($this->totalTaxSet !== null) {
                $data['totalTaxSet'] = $this->totalTaxSet->asArray();
            }
            return $data;
        }
}
