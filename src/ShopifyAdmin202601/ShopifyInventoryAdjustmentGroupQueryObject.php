<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Records a batch of inventory changes made together in a single operation. Tracks which [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) or [`StaffMember`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StaffMember) initiated the changes, when they occurred, and why they were made.
 *
 * Provides an audit trail through its reason and reference document URI. The reference document URI links to the source that triggered the adjustment, such as an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order), [`InventoryTransfer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryTransfer), or external system event. Use the [`changes`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryAdjustmentGroup#field-InventoryAdjustmentGroup.fields.changes) field to retrieve the specific quantity adjustments for each inventory state at affected [locations](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location).
 */
class ShopifyInventoryAdjustmentGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryAdjustmentGroup";

    /**
     * The app that triggered the inventory event, if one exists.
     */
    public function selectApp(?ShopifyInventoryAdjustmentGroupAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The set of inventory quantity changes that occurred in the inventory event.
     */
    public function selectChanges(?ShopifyInventoryAdjustmentGroupChangesArgumentsObject $argsObject = null): ShopifyInventoryChangeQueryObject
    {
        $object = new ShopifyInventoryChangeQueryObject("changes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time the inventory adjustment group was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

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
     * The reason for the group of adjustments.
     */
    public function selectReason(): static
    {
        $this->selectField("reason");

        return $this;
    }

    /**
     * A freeform URI that represents why the inventory change happened. This can be the entity adjusting inventory
     * quantities or the Shopify resource that's associated with the inventory adjustment. For example, a unit in a
     * draft order might have been previously committed, and a merchant later creates an order from the draft order.
     * In this case, the `referenceDocumentUri` for the inventory adjustment is a URI referencing the order ID.
     */
    public function selectReferenceDocumentUri(): static
    {
        $this->selectField("referenceDocumentUri");

        return $this;
    }

    /**
     * The staff member associated with the inventory event.
     */
    public function selectStaffMember(?ShopifyInventoryAdjustmentGroupStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
