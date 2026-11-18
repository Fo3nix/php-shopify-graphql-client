<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLineItem;

/**
 * An addition of items to an existing line item on the order.
 */
class ShopifyOrderStagedChangeIncrementItem
{
    protected $delta;
    protected $lineItem;

    
    /**
     * The number of items added.
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
            return $data;
        }
}
