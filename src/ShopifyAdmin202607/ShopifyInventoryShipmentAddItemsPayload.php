<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryShipmentLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryShipment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryShipmentAddItemsUserError;

/**
 * Return type for `inventoryShipmentAddItems` mutation.
 */
class ShopifyInventoryShipmentAddItemsPayload
{
    protected $addedItems;
    protected $inventoryShipment;
    protected $userErrors;

    
    /**
     * The list of added line items.
     *
     * @return ShopifyInventoryShipmentLineItem[]
     */
    public function getAddedItems(): ?array
    {
        return $this->addedItems;
    }

    
    /**
     * The inventory shipment with the added items.
     *
     * @return ShopifyInventoryShipment
     */
    public function getInventoryShipment(): ?ShopifyInventoryShipment
    {
        return $this->inventoryShipment;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyInventoryShipmentAddItemsUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['addedItems']) && $data['addedItems'] !== null) {
                $instance->addedItems = array_map(function($item) { return ShopifyInventoryShipmentLineItem::fromArray($item); }, $data['addedItems']);
            }
            if (isset($data['inventoryShipment']) && $data['inventoryShipment'] !== null) {
                $instance->inventoryShipment = ShopifyInventoryShipment::fromArray($data['inventoryShipment']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyInventoryShipmentAddItemsUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->addedItems !== null) {
                $data['addedItems'] = array_map(function($item) { return $item->asArray(); }, $this->addedItems);
            }
            if ($this->inventoryShipment !== null) {
                $data['inventoryShipment'] = $this->inventoryShipment->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
