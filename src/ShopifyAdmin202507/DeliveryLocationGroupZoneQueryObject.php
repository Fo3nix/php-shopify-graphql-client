<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryLocationGroupZoneQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLocationGroupZone";

    public function selectMethodDefinitionCounts(DeliveryLocationGroupZoneMethodDefinitionCountsArgumentsObject $argsObject = null)
    {
        $object = new DeliveryMethodDefinitionCountsQueryObject("methodDefinitionCounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMethodDefinitions(DeliveryLocationGroupZoneMethodDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new DeliveryMethodDefinitionConnectionQueryObject("methodDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectZone(DeliveryLocationGroupZoneZoneArgumentsObject $argsObject = null)
    {
        $object = new DeliveryZoneQueryObject("zone");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
