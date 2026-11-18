<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Returns the scheduled changes to inventory states related to the ledger document.
 */
class ShopifyInventoryScheduledChangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryScheduledChange";

    /**
     * The date and time that the scheduled change is expected to happen.
     */
    public function selectExpectedAt(): static
    {
        $this->selectField("expectedAt");

        return $this;
    }

    /**
     * The quantity
     * [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps/quantities-states#move-inventory-quantities-between-states)
     * to transition from.
     */
    public function selectFromName(): static
    {
        $this->selectField("fromName");

        return $this;
    }

    /**
     * The quantities of an inventory item that are related to a specific location.
     */
    public function selectInventoryLevel(?ShopifyInventoryScheduledChangeInventoryLevelArgumentsObject $argsObject = null): ShopifyInventoryLevelQueryObject
    {
        $object = new ShopifyInventoryLevelQueryObject("inventoryLevel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A freeform URI that represents what changed the inventory quantities.
     */
    public function selectLedgerDocumentUri(): static
    {
        $this->selectField("ledgerDocumentUri");

        return $this;
    }

    /**
     * The quantity of the scheduled change associated with the ledger document in the `fromName` state.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The quantity
     * [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps/quantities-states#move-inventory-quantities-between-states)
     * to transition to.
     */
    public function selectToName(): static
    {
        $this->selectField("toName");

        return $this;
    }
}
