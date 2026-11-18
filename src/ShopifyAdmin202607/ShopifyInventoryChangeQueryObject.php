<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A change in an inventory quantity of an inventory item at a location. Each change tracks how inventory moves between different states like available, committed, reserved, or damaged.
 *
 * The change captures the [amount changed](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryChange#field-InventoryChange.fields.delta), the resulting [quantity](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryChange#field-InventoryChange.fields.quantityAfterChange), and links to the associated [`InventoryItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem) and [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location).
 *
 * The [`name`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryChange#field-InventoryChange.fields.name) field indicates which inventory state changed, such as `available`, `reserved`, or `damaged`. The [`ledgerDocumentUri`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryChange#field-InventoryChange.fields.ledgerDocumentUri) field provides an audit trail by referencing the source document or system that triggered the change.
 */
class ShopifyInventoryChangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryChange";

    /**
     * The amount by which the inventory quantity was changed.
     */
    public function selectDelta(): static
    {
        $this->selectField("delta");

        return $this;
    }

    /**
     * The inventory item associated with this inventory change.
     */
    public function selectItem(?ShopifyInventoryChangeItemArgumentsObject $argsObject = null): ShopifyInventoryItemQueryObject
    {
        $object = new ShopifyInventoryItemQueryObject("item");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A URI that represents what the inventory quantity change was applied to.
     */
    public function selectLedgerDocumentUri(): static
    {
        $this->selectField("ledgerDocumentUri");

        return $this;
    }

    /**
     * The location associated with this inventory change.
     */
    public function selectLocation(?ShopifyInventoryChangeLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states)
     * of the inventory quantity that was changed.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The quantity of named inventory after the change.
     */
    public function selectQuantityAfterChange(): static
    {
        $this->selectField("quantityAfterChange");

        return $this;
    }
}
