<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Tracks the movement of [`InventoryItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem) objects between [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) objects. A transfer includes origin and destination information, [`InventoryTransferLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryTransferLineItem) objects with quantities, and shipment details.
 *
 * Transfers progress through multiple [`statuses`](https://shopify.dev/docs/api/admin-graphql/latest/enums/InventoryTransferStatus). The transfer maintains [`LocationSnapshot`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LocationSnapshot) objects of location details to preserve historical data even if locations change or are deleted later.
 */
class ShopifyInventoryTransferQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransfer";

    /**
     * The date and time the inventory transfer was created in UTC format.
     */
    public function selectDateCreated(): static
    {
        $this->selectField("dateCreated");

        return $this;
    }

    /**
     * Snapshot of the destination location (name, address, when snapped) with an optional link to the live Location object. If the original location is deleted, the snapshot data will still be available but the location link will be nil.
     */
    public function selectDestination(?ShopifyInventoryTransferDestinationArgumentsObject $argsObject = null): ShopifyLocationSnapshotQueryObject
    {
        $object = new ShopifyLocationSnapshotQueryObject("destination");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of events associated with the inventory transfer.
     */
    public function selectEvents(?ShopifyInventoryTransferEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the merchant has added timeline comments to the inventory transfer.
     */
    public function selectHasTimelineComment(): static
    {
        $this->selectField("hasTimelineComment");

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
     * The line items associated with the inventory transfer.
     */
    public function selectLineItems(?ShopifyInventoryTransferLineItemsArgumentsObject $argsObject = null): ShopifyInventoryTransferLineItemConnectionQueryObject
    {
        $object = new ShopifyInventoryTransferLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of line items associated with the inventory transfer. Limited to a maximum of 10000 by default.
     */
    public function selectLineItemsCount(?ShopifyInventoryTransferLineItemsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("lineItemsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyInventoryTransferMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of metafield definitions.
     *
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(?ShopifyInventoryTransferMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyInventoryTransferMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the inventory transfer.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * Additional note attached to the inventory transfer.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * Snapshot of the origin location (name, address, when snapped) with an optional link to the live Location object. If the original location is deleted, the snapshot data will still be available but the location link will be nil.
     */
    public function selectOrigin(?ShopifyInventoryTransferOriginArgumentsObject $argsObject = null): ShopifyLocationSnapshotQueryObject
    {
        $object = new ShopifyLocationSnapshotQueryObject("origin");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total quantity of items accepted, rejected, or marked as canceled in the transfer.
     */
    public function selectReceivedQuantity(): static
    {
        $this->selectField("receivedQuantity");

        return $this;
    }

    /**
     * The reference name of the inventory transfer.
     */
    public function selectReferenceName(): static
    {
        $this->selectField("referenceName");

        return $this;
    }

    /**
     * The shipments associated with the inventory transfer.
     */
    public function selectShipments(?ShopifyInventoryTransferShipmentsArgumentsObject $argsObject = null): ShopifyInventoryShipmentConnectionQueryObject
    {
        $object = new ShopifyInventoryShipmentConnectionQueryObject("shipments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The current status of the transfer.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * A list of tags that have been added to the inventory transfer.
     */
    public function selectTags(): static
    {
        $this->selectField("tags");

        return $this;
    }

    /**
     * The total quantity of items being transferred.
     */
    public function selectTotalQuantity(): static
    {
        $this->selectField("totalQuantity");

        return $this;
    }
}
