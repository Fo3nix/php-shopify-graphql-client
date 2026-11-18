<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Weight information for an [`InventoryItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem) when packaged. Provides the weight specification used for inventory management and shipping calculations. Learn more about [managing inventory](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps).
 */
class ShopifyInventoryItemMeasurementQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryItemMeasurement";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The weight of the inventory item.
     */
    public function selectWeight(?ShopifyInventoryItemMeasurementWeightArgumentsObject $argsObject = null): ShopifyWeightQueryObject
    {
        $object = new ShopifyWeightQueryObject("weight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
