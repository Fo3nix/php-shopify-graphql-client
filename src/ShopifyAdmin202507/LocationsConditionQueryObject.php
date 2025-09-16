<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LocationsConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationsCondition";

    public function selectApplicationLevel()
    {
        $this->selectField("applicationLevel");

        return $this;
    }

    public function selectLocations(LocationsConditionLocationsArgumentsObject $argsObject = null)
    {
        $object = new LocationConnectionQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
