<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * Represents an update to a single transfer line item.
 */
class ShopifyInventoryTransferLineItemUpdate
{
    protected $deltaQuantity;
    protected $inventoryItemId;
    protected $newQuantity;

    
    /**
     * The delta quantity for the transfer line item.
     *
     * @return int
     */
    public function getDeltaQuantity(): ?int
    {
        return $this->deltaQuantity;
    }

    
    /**
     * The inventory item ID for the transfer line item.
     *
     * @return string
     */
    public function getInventoryItemId(): ?string
    {
        return $this->inventoryItemId;
    }

    
    /**
     * The new quantity for the transfer line item.
     *
     * @return int
     */
    public function getNewQuantity(): ?int
    {
        return $this->newQuantity;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['deltaQuantity']) && $data['deltaQuantity'] !== null) {
                $instance->deltaQuantity = $data['deltaQuantity'];
            }
            if (isset($data['inventoryItemId']) && $data['inventoryItemId'] !== null) {
                $instance->inventoryItemId = $data['inventoryItemId'];
            }
            if (isset($data['newQuantity']) && $data['newQuantity'] !== null) {
                $instance->newQuantity = $data['newQuantity'];
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
            if ($this->deltaQuantity !== null) {
                $data['deltaQuantity'] = $this->deltaQuantity;
            }
            if ($this->inventoryItemId !== null) {
                $data['inventoryItemId'] = $this->inventoryItemId;
            }
            if ($this->newQuantity !== null) {
                $data['newQuantity'] = $this->newQuantity;
            }
            return $data;
        }
}
