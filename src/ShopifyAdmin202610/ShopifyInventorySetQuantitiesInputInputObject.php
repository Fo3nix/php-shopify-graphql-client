<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to set inventory quantities.
 */
class ShopifyInventorySetQuantitiesInputInputObject extends InputObject
{
    const REQUIRED = ["reason", "name", "quantities"];

    protected $reason;
    protected $name;
    protected $referenceDocumentUri;
    protected $quantities;

    /**
     * The reason for the quantity changes. The value must be one of the [possible
     * reasons](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps/quantities-states#set-inventory-quantities-on-hand).
     */
    public function setReason($reason): static
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * The name of quantities to be changed. The only accepted values are: `available` or `on_hand`.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * A URI that represents why the inventory change happened, identifying the source system and document that caused this adjustment. Enables complete audit trails and brand visibility in Shopify admin inventory history.
     *
     * Preferred format - Global ID (GID): gid://[your-app-name]/[entity-type]/[id]
     *
     * Examples:
     * - gid://warehouse-app/PurchaseOrder/PO-2024-001 (stock received)
     * - gid://3pl-system/CycleCount/CC-2024-0125 (cycle count adjustment)
     * - gid://pos-app/Transaction/TXN-98765 (in-store sale)
     * - gid://erp-connector/SyncJob/SYNC-2024-11-21-001 (ERP sync)
     * - gid://shopify/Order/1234567890 (Shopify order reference)
     *
     * Benefits: Your app name appears directly in merchant inventory history, reducing support tickets and providing clear audit trails for compliance.
     *
     * Alternative formats (also supported): https://myapp.com/documents/12345, custom-scheme://identifier
     *
     * Requirements: Valid URI with scheme and content. For GID format, all components (app, entity, id) must be present.
     */
    public function setReferenceDocumentUri($referenceDocumentUri): static
    {
        $this->referenceDocumentUri = $referenceDocumentUri;

        return $this;
    }

    /**
     * The values to which each quantities will be set.
     */
    public function setQuantities(array $quantities): static
    {
        $this->quantities = $quantities;

        return $this;
    }
}
