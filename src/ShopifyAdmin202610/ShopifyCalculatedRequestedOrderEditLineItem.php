<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyBag;

/**
 * The line item being processed for a requested order edit and its calculated monetary values.
 */
class ShopifyCalculatedRequestedOrderEditLineItem
{
    protected $lineItem;
    protected $quantity;
    protected $subtotalSet;
    protected $totalTaxSet;

    
    /**
     * The line item being processed for a requested order edit.
     *
     * @return ShopifyLineItem
     */
    public function getLineItem(): ?ShopifyLineItem
    {
        return $this->lineItem;
    }

    
    /**
     * The quantity being edited.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * The subtotal of the edit line item.
     *
     * @return ShopifyMoneyBag
     */
    public function getSubtotalSet(): ?ShopifyMoneyBag
    {
        return $this->subtotalSet;
    }

    
    /**
     * The total tax of the edit line item.
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
            if (isset($data['lineItem']) && $data['lineItem'] !== null) {
                $instance->lineItem = ShopifyLineItem::fromArray($data['lineItem']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
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
            if ($this->lineItem !== null) {
                $data['lineItem'] = $this->lineItem->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
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
