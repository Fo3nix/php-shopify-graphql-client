<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryMethodDefinitionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryMethodDefinitionConnection";

    public function selectEdges(DeliveryMethodDefinitionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryMethodDefinitionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DeliveryMethodDefinitionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryMethodDefinitionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DeliveryMethodDefinitionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
