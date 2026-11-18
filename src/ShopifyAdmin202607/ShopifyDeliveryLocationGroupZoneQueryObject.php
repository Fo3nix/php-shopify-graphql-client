<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Links a location group with a zone and the associated method definitions.
 */
class ShopifyDeliveryLocationGroupZoneQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLocationGroupZone";

    /**
     * The number of method definitions for the zone.
     */
    public function selectMethodDefinitionCounts(?ShopifyDeliveryLocationGroupZoneMethodDefinitionCountsArgumentsObject $argsObject = null): ShopifyDeliveryMethodDefinitionCountsQueryObject
    {
        $object = new ShopifyDeliveryMethodDefinitionCountsQueryObject("methodDefinitionCounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The method definitions associated to a zone and location group.
     */
    public function selectMethodDefinitions(?ShopifyDeliveryLocationGroupZoneMethodDefinitionsArgumentsObject $argsObject = null): ShopifyDeliveryMethodDefinitionConnectionQueryObject
    {
        $object = new ShopifyDeliveryMethodDefinitionConnectionQueryObject("methodDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The zone associated to a location group.
     */
    public function selectZone(?ShopifyDeliveryLocationGroupZoneZoneArgumentsObject $argsObject = null): ShopifyDeliveryZoneQueryObject
    {
        $object = new ShopifyDeliveryZoneQueryObject("zone");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
