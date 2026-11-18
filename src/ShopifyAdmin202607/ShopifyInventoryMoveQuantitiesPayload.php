<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryAdjustmentGroup;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryMoveQuantitiesUserError;

/**
 * Return type for `inventoryMoveQuantities` mutation.
 */
class ShopifyInventoryMoveQuantitiesPayload
{
    protected $inventoryAdjustmentGroup;
    protected $userErrors;

    
    /**
     * The group of changes made by the operation.
     *
     * @return ShopifyInventoryAdjustmentGroup
     */
    public function getInventoryAdjustmentGroup(): ?ShopifyInventoryAdjustmentGroup
    {
        return $this->inventoryAdjustmentGroup;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyInventoryMoveQuantitiesUserError[]
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
            if (isset($data['inventoryAdjustmentGroup']) && $data['inventoryAdjustmentGroup'] !== null) {
                $instance->inventoryAdjustmentGroup = ShopifyInventoryAdjustmentGroup::fromArray($data['inventoryAdjustmentGroup']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyInventoryMoveQuantitiesUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->inventoryAdjustmentGroup !== null) {
                $data['inventoryAdjustmentGroup'] = $this->inventoryAdjustmentGroup->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
