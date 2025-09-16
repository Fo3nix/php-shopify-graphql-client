<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryItemMeasurementQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryItemMeasurement";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectWeight(InventoryItemMeasurementWeightArgumentsObject $argsObject = null)
    {
        $object = new WeightQueryObject("weight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
