<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryItemMeasurementQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryItemMeasurement";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectWeight(ShopifyInventoryItemMeasurementWeightArgumentsObject $argsObject = null)
    {
        $object = new ShopifyWeightQueryObject("weight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
