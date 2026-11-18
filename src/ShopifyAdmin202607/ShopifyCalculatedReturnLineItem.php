<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillmentLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCalculatedRestockingFee;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;

/**
 * A calculated return line item.
 */
class ShopifyCalculatedReturnLineItem
{
    protected $fulfillmentLineItem;
    protected $id;
    protected $quantity;
    protected $restockingFee;
    protected $subtotalBeforeOrderDiscountsSet;
    protected $subtotalSet;
    protected $totalTaxSet;

    
    /**
     * The fulfillment line item from which items are returned.
     *
     * @return ShopifyFulfillmentLineItem
     */
    public function getFulfillmentLineItem(): ?ShopifyFulfillmentLineItem
    {
        return $this->fulfillmentLineItem;
    }

    
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
     * The quantity being returned.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * The restocking fee of the return line item.
     *
     * @return ShopifyCalculatedRestockingFee
     */
    public function getRestockingFee(): ?ShopifyCalculatedRestockingFee
    {
        return $this->restockingFee;
    }

    
    /**
     * The subtotal of the return line item before order discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getSubtotalBeforeOrderDiscountsSet(): ?ShopifyMoneyBag
    {
        return $this->subtotalBeforeOrderDiscountsSet;
    }

    
    /**
     * The subtotal of the return line item.
     *
     * @return ShopifyMoneyBag
     */
    public function getSubtotalSet(): ?ShopifyMoneyBag
    {
        return $this->subtotalSet;
    }

    
    /**
     * The total tax of the return line item.
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
            if (isset($data['fulfillmentLineItem']) && $data['fulfillmentLineItem'] !== null) {
                $instance->fulfillmentLineItem = ShopifyFulfillmentLineItem::fromArray($data['fulfillmentLineItem']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['restockingFee']) && $data['restockingFee'] !== null) {
                $instance->restockingFee = ShopifyCalculatedRestockingFee::fromArray($data['restockingFee']);
            }
            if (isset($data['subtotalBeforeOrderDiscountsSet']) && $data['subtotalBeforeOrderDiscountsSet'] !== null) {
                $instance->subtotalBeforeOrderDiscountsSet = ShopifyMoneyBag::fromArray($data['subtotalBeforeOrderDiscountsSet']);
            }
            if (isset($data['subtotalSet']) && $data['subtotalSet'] !== null) {
                $instance->subtotalSet = ShopifyMoneyBag::fromArray($data['subtotalSet']);
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
            if ($this->fulfillmentLineItem !== null) {
                $data['fulfillmentLineItem'] = $this->fulfillmentLineItem->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->restockingFee !== null) {
                $data['restockingFee'] = $this->restockingFee->asArray();
            }
            if ($this->subtotalBeforeOrderDiscountsSet !== null) {
                $data['subtotalBeforeOrderDiscountsSet'] = $this->subtotalBeforeOrderDiscountsSet->asArray();
            }
            if ($this->subtotalSet !== null) {
                $data['subtotalSet'] = $this->subtotalSet->asArray();
            }
            if ($this->totalTaxSet !== null) {
                $data['totalTaxSet'] = $this->totalTaxSet->asArray();
            }
            return $data;
        }
}
