<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryLocationGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLocationGroup";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLocations(ShopifyDeliveryLocationGroupLocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationConnectionQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationsCount(ShopifyDeliveryLocationGroupLocationsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("locationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
