<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyInventoryShipment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyInventoryShipmentReceiveUserError;

/**
 * Return type for `inventoryShipmentReceive` mutation.
 */
class ShopifyInventoryShipmentReceivePayload
{
    protected $inventoryShipment;
    protected $userErrors;

    
    /**
     * The inventory shipment with received items.
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
     * @return ShopifyInventoryShipmentReceiveUserError[]
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
                $instance->userErrors = array_map(function($item) { return ShopifyInventoryShipmentReceiveUserError::fromArray($item); }, $data['userErrors']);
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
