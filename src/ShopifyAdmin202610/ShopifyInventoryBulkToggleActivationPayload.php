<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryLevel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryBulkToggleActivationUserError;

/**
 * Return type for `inventoryBulkToggleActivation` mutation.
 */
class ShopifyInventoryBulkToggleActivationPayload
{
    protected $inventoryItem;
    protected $inventoryLevels;
    protected $userErrors;

    
    /**
     * The inventory item that was updated.
     *
     * @return ShopifyInventoryItem
     */
    public function getInventoryItem(): ?ShopifyInventoryItem
    {
        return $this->inventoryItem;
    }

    
    /**
     * The activated inventory levels.
     *
     * @return ShopifyInventoryLevel[]
     */
    public function getInventoryLevels(): ?array
    {
        return $this->inventoryLevels;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyInventoryBulkToggleActivationUserError[]
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
            if (isset($data['inventoryItem']) && $data['inventoryItem'] !== null) {
                $instance->inventoryItem = ShopifyInventoryItem::fromArray($data['inventoryItem']);
            }
            if (isset($data['inventoryLevels']) && $data['inventoryLevels'] !== null) {
                $instance->inventoryLevels = array_map(function($item) { return ShopifyInventoryLevel::fromArray($item); }, $data['inventoryLevels']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyInventoryBulkToggleActivationUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->inventoryItem !== null) {
                $data['inventoryItem'] = $this->inventoryItem->asArray();
            }
            if ($this->inventoryLevels !== null) {
                $data['inventoryLevels'] = array_map(function($item) { return $item->asArray(); }, $this->inventoryLevels);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
