<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyInventoryLevel;

/**
 * Returns the scheduled changes to inventory states related to the ledger document.
 */
class ShopifyInventoryScheduledChange
{
    protected $expectedAt;
    protected $fromName;
    protected $inventoryLevel;
    protected $ledgerDocumentUri;
    protected $quantity;
    protected $toName;

    
    /**
     * The date and time that the scheduled change is expected to happen.
     *
     * @return Carbon
     */
    public function getExpectedAt(): ?Carbon
    {
        return $this->expectedAt;
    }

    
    /**
     * The quantity
     * [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps/quantities-states#move-inventory-quantities-between-states)
     * to transition from.
     *
     * @return string
     */
    public function getFromName(): ?string
    {
        return $this->fromName;
    }

    
    /**
     * The quantities of an inventory item that are related to a specific location.
     *
     * @return ShopifyInventoryLevel
     */
    public function getInventoryLevel(): ?ShopifyInventoryLevel
    {
        return $this->inventoryLevel;
    }

    
    /**
     * A freeform URI that represents what changed the inventory quantities.
     *
     * @return string
     */
    public function getLedgerDocumentUri(): mixed
    {
        return $this->ledgerDocumentUri;
    }

    
    /**
     * The quantity of the scheduled change associated with the ledger document in the `fromName` state.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * The quantity
     * [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps/quantities-states#move-inventory-quantities-between-states)
     * to transition to.
     *
     * @return string
     */
    public function getToName(): ?string
    {
        return $this->toName;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['expectedAt']) && $data['expectedAt'] !== null) {
                $instance->expectedAt = new Carbon($data['expectedAt']);
            }
            if (isset($data['fromName']) && $data['fromName'] !== null) {
                $instance->fromName = $data['fromName'];
            }
            if (isset($data['inventoryLevel']) && $data['inventoryLevel'] !== null) {
                $instance->inventoryLevel = ShopifyInventoryLevel::fromArray($data['inventoryLevel']);
            }
            if (isset($data['ledgerDocumentUri']) && $data['ledgerDocumentUri'] !== null) {
                $instance->ledgerDocumentUri = $data['ledgerDocumentUri'];
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['toName']) && $data['toName'] !== null) {
                $instance->toName = $data['toName'];
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
            if ($this->expectedAt !== null) {
                $data['expectedAt'] = $this->expectedAt->toIso8601String();
            }
            if ($this->fromName !== null) {
                $data['fromName'] = $this->fromName;
            }
            if ($this->inventoryLevel !== null) {
                $data['inventoryLevel'] = $this->inventoryLevel->asArray();
            }
            if ($this->ledgerDocumentUri !== null) {
                $data['ledgerDocumentUri'] = $this->ledgerDocumentUri;
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->toName !== null) {
                $data['toName'] = $this->toName;
            }
            return $data;
        }
}
