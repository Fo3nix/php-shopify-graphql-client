<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A location group is a collection of locations. They share zones and delivery methods across delivery
 * profiles.
 */
class ShopifyDeliveryLocationGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLocationGroup";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * A list of all locations that are part of this location group.
     */
    public function selectLocations(?ShopifyDeliveryLocationGroupLocationsArgumentsObject $argsObject = null): ShopifyLocationConnectionQueryObject
    {
        $object = new ShopifyLocationConnectionQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A count of all locations that are part of this location group.
     */
    public function selectLocationsCount(?ShopifyDeliveryLocationGroupLocationsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("locationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
