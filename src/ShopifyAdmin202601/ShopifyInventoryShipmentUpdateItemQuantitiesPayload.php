<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyInventoryShipment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyInventoryShipmentLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyInventoryShipmentUpdateItemQuantitiesUserError;

/**
 * Return type for `inventoryShipmentUpdateItemQuantities` mutation.
 */
class ShopifyInventoryShipmentUpdateItemQuantitiesPayload
{
    protected $shipment;
    protected $updatedLineItems;
    protected $userErrors;

    
    /**
     * The inventory shipment with updated item quantities.
     *
     * @return ShopifyInventoryShipment
     */
    public function getShipment(): ?ShopifyInventoryShipment
    {
        return $this->shipment;
    }

    
    /**
     * The updated item quantities.
     *
     * @return ShopifyInventoryShipmentLineItem[]
     */
    public function getUpdatedLineItems(): ?array
    {
        return $this->updatedLineItems;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyInventoryShipmentUpdateItemQuantitiesUserError[]
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
            if (isset($data['shipment']) && $data['shipment'] !== null) {
                $instance->shipment = ShopifyInventoryShipment::fromArray($data['shipment']);
            }
            if (isset($data['updatedLineItems']) && $data['updatedLineItems'] !== null) {
                $instance->updatedLineItems = array_map(function($item) { return ShopifyInventoryShipmentLineItem::fromArray($item); }, $data['updatedLineItems']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyInventoryShipmentUpdateItemQuantitiesUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->shipment !== null) {
                $data['shipment'] = $this->shipment->asArray();
            }
            if ($this->updatedLineItems !== null) {
                $data['updatedLineItems'] = array_map(function($item) { return $item->asArray(); }, $this->updatedLineItems);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
