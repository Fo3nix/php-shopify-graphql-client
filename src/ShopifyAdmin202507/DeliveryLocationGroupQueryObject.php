<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryLocationGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLocationGroup";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLocations(DeliveryLocationGroupLocationsArgumentsObject $argsObject = null)
    {
        $object = new LocationConnectionQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationsCount(DeliveryLocationGroupLocationsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("locationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
