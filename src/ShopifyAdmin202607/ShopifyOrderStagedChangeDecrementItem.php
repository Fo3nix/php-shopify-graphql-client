<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLineItem;

/**
 * An removal of items from an existing line item on the order.
 */
class ShopifyOrderStagedChangeDecrementItem
{
    protected $delta;
    protected $lineItem;
    protected $restock;

    
    /**
     * The number of items removed.
     *
     * @return int
     */
    public function getDelta(): ?int
    {
        return $this->delta;
    }

    
    /**
     * The original line item.
     *
     * @return ShopifyLineItem
     */
    public function getLineItem(): ?ShopifyLineItem
    {
        return $this->lineItem;
    }

    
    /**
     * The intention to restock the removed items.
     *
     * @return bool
     */
    public function getRestock(): ?bool
    {
        return $this->restock;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['delta']) && $data['delta'] !== null) {
                $instance->delta = $data['delta'];
            }
            if (isset($data['lineItem']) && $data['lineItem'] !== null) {
                $instance->lineItem = ShopifyLineItem::fromArray($data['lineItem']);
            }
            if (isset($data['restock']) && $data['restock'] !== null) {
                $instance->restock = $data['restock'];
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
            if ($this->delta !== null) {
                $data['delta'] = $this->delta;
            }
            if ($this->lineItem !== null) {
                $data['lineItem'] = $this->lineItem->asArray();
            }
            if ($this->restock !== null) {
                $data['restock'] = $this->restock;
            }
            return $data;
        }
}
