<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryCustomizationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCustomizationConnection";

    public function selectEdges(DeliveryCustomizationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCustomizationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DeliveryCustomizationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCustomizationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DeliveryCustomizationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
