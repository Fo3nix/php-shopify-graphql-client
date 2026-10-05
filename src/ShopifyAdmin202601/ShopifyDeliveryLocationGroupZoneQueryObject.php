<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryLocationGroupZoneQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLocationGroupZone";

    public function selectMethodDefinitionCounts(ShopifyDeliveryLocationGroupZoneMethodDefinitionCountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryMethodDefinitionCountsQueryObject("methodDefinitionCounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMethodDefinitions(ShopifyDeliveryLocationGroupZoneMethodDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryMethodDefinitionConnectionQueryObject("methodDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectZone(ShopifyDeliveryLocationGroupZoneZoneArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryZoneQueryObject("zone");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
