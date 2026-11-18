<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields representing the change to be made to an inventory item at a location.
 */
class ShopifyInventoryMoveQuantityTerminalInputInputObject extends InputObject
{
    const REQUIRED = ["locationId", "name"];

    protected $locationId;
    protected $name;
    protected $ledgerDocumentUri;
    protected $changeFromQuantity;

    /**
     * Specifies the location at which the change will be applied.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The quantity
     * [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states) to be
     * moved.
     */
    public function setName($name): static
    {
        $this->name = $name;

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
     * Requirements: Valid non-Shopify URI with scheme and content. Required for all quantity names except `available`. Cannot use gid://shopify/* format.
     */
    public function setLedgerDocumentUri($ledgerDocumentUri): static
    {
        $this->ledgerDocumentUri = $ledgerDocumentUri;

        return $this;
    }

    /**
     * The quantity currently expected at this location, before the move is applied.
     *
     * This field enables a compare-and-swap (CAS) safety check. If the location’s current quantity doesn't match the value you provide, then the mutation fails with a `CHANGE_FROM_QUANTITY_STALE` error. This helps prevent unintended overwrites when the request is based on stale inventory data.
     *
     * To skip the CAS check, pass `null`. Use this only when your system is the source of truth for this inventory and you don’t need to protect against concurrent updates.
     * This field is mandatory: you must explicitly pass in a value, even if that value is `null`, or the mutation returns an error.
     *
     * For more information, refer to the [compare and swap documentation](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states#compare-and-swap).
     */
    public function setChangeFromQuantity($changeFromQuantity): static
    {
        $this->changeFromQuantity = $changeFromQuantity;

        return $this;
    }
}
