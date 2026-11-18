<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryTransfer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryTransferLineItemUpdate;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryTransferSetItemsUserError;

/**
 * Return type for `inventoryTransferSetItems` mutation.
 */
class ShopifyInventoryTransferSetItemsPayload
{
    protected $inventoryTransfer;
    protected $updatedLineItems;
    protected $userErrors;

    
    /**
     * The Transfer with its line items updated.
     *
     * @return ShopifyInventoryTransfer
     */
    public function getInventoryTransfer(): ?ShopifyInventoryTransfer
    {
        return $this->inventoryTransfer;
    }

    
    /**
     * The updated line items.
     *
     * @return ShopifyInventoryTransferLineItemUpdate[]
     */
    public function getUpdatedLineItems(): ?array
    {
        return $this->updatedLineItems;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyInventoryTransferSetItemsUserError[]
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
            if (isset($data['updatedLineItems']) && $data['updatedLineItems'] !== null) {
                $instance->updatedLineItems = array_map(function($item) { return ShopifyInventoryTransferLineItemUpdate::fromArray($item); }, $data['updatedLineItems']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyInventoryTransferSetItemsUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->updatedLineItems !== null) {
                $data['updatedLineItems'] = array_map(function($item) { return $item->asArray(); }, $this->updatedLineItems);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
