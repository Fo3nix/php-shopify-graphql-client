<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The quantities of an inventory item at a specific location. Each inventory level connects one [`InventoryItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem) to one [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location), tracking multiple quantity states like available, on-hand, incoming, and committed.
 *
 * The [`quantities`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryLevel#field-InventoryLevel.fields.quantities) field provides access to different inventory states. Learn [more about inventory states and relationships](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states#inventory-object-relationships).
 */
class ShopifyInventoryLevelQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryLevel";

    /**
     * Whether the inventory items associated with the inventory level can be deactivated.
     */
    public function selectCanDeactivate(): static
    {
        $this->selectField("canDeactivate");

        return $this;
    }

    /**
     * The date and time when the inventory level was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * Describes either the impact of deactivating the inventory level, or why the inventory level can't be deactivated.
     */
    public function selectDeactivationAlert(): static
    {
        $this->selectField("deactivationAlert");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Whether the inventory level is active.
     */
    public function selectIsActive(): static
    {
        $this->selectField("isActive");

        return $this;
    }

    /**
     * Inventory item associated with the inventory level.
     */
    public function selectItem(?ShopifyInventoryLevelItemArgumentsObject $argsObject = null): ShopifyInventoryItemQueryObject
    {
        $object = new ShopifyInventoryItemQueryObject("item");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The location associated with the inventory level.
     */
    public function selectLocation(?ShopifyInventoryLevelLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity of an inventory item at a specific location, for a quantity
     * [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states).
     */
    public function selectQuantities(ShopifyInventoryLevelQuantitiesArgumentsObject $argsObject): ShopifyInventoryQuantityQueryObject
    {
        $object = new ShopifyInventoryQuantityQueryObject("quantities");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Scheduled changes for the requested quantity names.
     *
     * @deprecated Scheduled changes will be phased out in a future version.
     */
    public function selectScheduledChanges(?ShopifyInventoryLevelScheduledChangesArgumentsObject $argsObject = null): ShopifyInventoryScheduledChangeConnectionQueryObject
    {
        $object = new ShopifyInventoryScheduledChangeConnectionQueryObject("scheduledChanges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the inventory level was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
