<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryShipment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryShipmentRemoveItemsUserError;

/**
 * Return type for `inventoryShipmentRemoveItems` mutation.
 */
class ShopifyInventoryShipmentRemoveItemsPayload
{
    protected $inventoryShipment;
    protected $userErrors;

    
    /**
     * The inventory shipment with items removed.
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
     * @return ShopifyInventoryShipmentRemoveItemsUserError[]
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
            if (isset($data['inventoryShipment']) && $data['inventoryShipment'] !== null) {
                $instance->inventoryShipment = ShopifyInventoryShipment::fromArray($data['inventoryShipment']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyInventoryShipmentRemoveItemsUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->inventoryShipment !== null) {
                $data['inventoryShipment'] = $this->inventoryShipment->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
