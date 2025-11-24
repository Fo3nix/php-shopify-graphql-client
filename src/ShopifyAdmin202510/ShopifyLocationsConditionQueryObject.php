<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyLocationsConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationsCondition";

    public function selectApplicationLevel()
    {
        $this->selectField("applicationLevel");

        return $this;
    }

    public function selectLocations(ShopifyLocationsConditionLocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationConnectionQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
