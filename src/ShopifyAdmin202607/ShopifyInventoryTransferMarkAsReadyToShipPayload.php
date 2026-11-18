<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryTransfer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryTransferMarkAsReadyToShipUserError;

/**
 * Return type for `inventoryTransferMarkAsReadyToShip` mutation.
 */
class ShopifyInventoryTransferMarkAsReadyToShipPayload
{
    protected $inventoryTransfer;
    protected $userErrors;

    
    /**
     * The ready to ship inventory transfer.
     *
     * @return ShopifyInventoryTransfer
     */
    public function getInventoryTransfer(): ?ShopifyInventoryTransfer
    {
        return $this->inventoryTransfer;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyInventoryTransferMarkAsReadyToShipUserError[]
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
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyInventoryTransferMarkAsReadyToShipUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
