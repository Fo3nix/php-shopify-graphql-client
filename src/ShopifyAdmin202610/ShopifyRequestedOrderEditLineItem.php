<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLineItem;

/**
 * A line item included in a buyer-initiated requested order edit.
 */
class ShopifyRequestedOrderEditLineItem implements ShopifyNode
{
    protected $id;
    protected $lineItem;
    protected $quantity;
    protected $resolvedQuantity;

    
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
     * The order line item associated with this requested order edit line item.
     *
     * @return ShopifyLineItem
     */
    public function getLineItem(): ?ShopifyLineItem
    {
        return $this->lineItem;
    }

    
    /**
     * The quantity requested for this line item in the requested order edit.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * The quantity of the requested line item that has been resolved.
     *
     * @return int
     */
    public function getResolvedQuantity(): ?int
    {
        return $this->resolvedQuantity;
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
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['resolvedQuantity']) && $data['resolvedQuantity'] !== null) {
                $instance->resolvedQuantity = $data['resolvedQuantity'];
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
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->resolvedQuantity !== null) {
                $data['resolvedQuantity'] = $this->resolvedQuantity;
            }
            return $data;
        }
}
