<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the inventory item associated with the scheduled changes that need to be applied.
 */
class ShopifyInventoryScheduledChangeItemInputInputObject extends InputObject
{
    const REQUIRED = ["inventoryItemId", "locationId", "ledgerDocumentUri", "scheduledChanges"];

    protected $inventoryItemId;
    protected $locationId;
    protected $ledgerDocumentUri;
    protected $scheduledChanges;

    /**
     * The ID of the inventory item.
     */
    public function setInventoryItemId($inventoryItemId): static
    {
        $this->inventoryItemId = $inventoryItemId;

        return $this;
    }

    /**
     * The ID of the location.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * A non-Shopify URI that identifies what specific inventory transaction or ledger entry was changed. Represents the exact inventory movement being referenced, distinct from the business reason for the change.
     *
     * Preferred format - Global ID (GID): gid://[your-app-name]/[transaction-type]/[id]
     *
     * Examples:
     * - gid://warehouse-app/InventoryTransaction/TXN-2024-001 (specific transaction)
     * - gid://3pl-system/StockMovement/SM-2024-0125 (stock movement record)
     * - gid://pos-app/InventoryUpdate/UPD-98765 (POS inventory update)
     * - gid://erp-connector/LedgerEntry/LE-2024-11-21-001 (ledger entry)
     *
     * Requirements: Valid non-Shopify URI with scheme and content. Cannot use gid://shopify/* format.
     */
    public function setLedgerDocumentUri($ledgerDocumentUri): static
    {
        $this->ledgerDocumentUri = $ledgerDocumentUri;

        return $this;
    }

    /**
     * An array of all the scheduled changes for the item.
     */
    public function setScheduledChanges(array $scheduledChanges): static
    {
        $this->scheduledChanges = $scheduledChanges;

        return $this;
    }
}
