<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryTransfer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryTransferLineItemUpdate;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryTransferRemoveItemsUserError;

/**
 * Return type for `inventoryTransferRemoveItems` mutation.
 */
class ShopifyInventoryTransferRemoveItemsPayload
{
    protected $inventoryTransfer;
    protected $removedQuantities;
    protected $userErrors;

    
    /**
     * The transfer with line items removed.
     *
     * @return ShopifyInventoryTransfer
     */
    public function getInventoryTransfer(): ?ShopifyInventoryTransfer
    {
        return $this->inventoryTransfer;
    }

    
    /**
     * The line items that have had their shippable quantity removed.
     *
     * @return ShopifyInventoryTransferLineItemUpdate[]
     */
    public function getRemovedQuantities(): ?array
    {
        return $this->removedQuantities;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyInventoryTransferRemoveItemsUserError[]
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
            if (isset($data['inventoryTransfer']) && $data['inventoryTransfer'] !== null) {
                $instance->inventoryTransfer = ShopifyInventoryTransfer::fromArray($data['inventoryTransfer']);
            }
            if (isset($data['removedQuantities']) && $data['removedQuantities'] !== null) {
                $instance->removedQuantities = array_map(function($item) { return ShopifyInventoryTransferLineItemUpdate::fromArray($item); }, $data['removedQuantities']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyInventoryTransferRemoveItemsUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->inventoryTransfer !== null) {
                $data['inventoryTransfer'] = $this->inventoryTransfer->asArray();
            }
            if ($this->removedQuantities !== null) {
                $data['removedQuantities'] = array_map(function($item) { return $item->asArray(); }, $this->removedQuantities);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
