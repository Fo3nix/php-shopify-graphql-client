<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition checking the location that the visitor is shopping from.
 */
class ShopifyLocationsConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationsCondition";

    /**
     * The application level for the condition.
     */
    public function selectApplicationLevel(): static
    {
        $this->selectField("applicationLevel");

        return $this;
    }

    /**
     * The locations that comprise the market.
     */
    public function selectLocations(?ShopifyLocationsConditionLocationsArgumentsObject $argsObject = null): ShopifyLocationConnectionQueryObject
    {
        $object = new ShopifyLocationConnectionQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
