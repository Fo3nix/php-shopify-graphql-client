<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyReverseFulfillmentOrderDisposition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyReverseFulfillmentOrderLineItem;

/**
 * The details about a reverse delivery line item.
 */
class ShopifyReverseDeliveryLineItem implements ShopifyNode
{
    protected $dispositions;
    protected $id;
    protected $quantity;
    protected $reverseFulfillmentOrderLineItem;

    
    /**
     * The dispositions of the item.
     *
     * @return ShopifyReverseFulfillmentOrderDisposition[]
     */
    public function getDispositions(): ?array
    {
        return $this->dispositions;
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
     * The expected number of units.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * The corresponding reverse fulfillment order line item.
     *
     * @return ShopifyReverseFulfillmentOrderLineItem
     */
    public function getReverseFulfillmentOrderLineItem(): ?ShopifyReverseFulfillmentOrderLineItem
    {
        return $this->reverseFulfillmentOrderLineItem;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['dispositions']) && $data['dispositions'] !== null) {
                $instance->dispositions = array_map(function($item) { return ShopifyReverseFulfillmentOrderDisposition::fromArray($item); }, $data['dispositions']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['reverseFulfillmentOrderLineItem']) && $data['reverseFulfillmentOrderLineItem'] !== null) {
                $instance->reverseFulfillmentOrderLineItem = ShopifyReverseFulfillmentOrderLineItem::fromArray($data['reverseFulfillmentOrderLineItem']);
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
            if ($this->dispositions !== null) {
                $data['dispositions'] = array_map(function($item) { return $item->asArray(); }, $this->dispositions);
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->reverseFulfillmentOrderLineItem !== null) {
                $data['reverseFulfillmentOrderLineItem'] = $this->reverseFulfillmentOrderLineItem->asArray();
            }
            return $data;
        }
}
