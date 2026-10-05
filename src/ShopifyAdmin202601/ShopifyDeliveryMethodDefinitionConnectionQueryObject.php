<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryMethodDefinitionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryMethodDefinitionConnection";

    public function selectEdges(ShopifyDeliveryMethodDefinitionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryMethodDefinitionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDeliveryMethodDefinitionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryMethodDefinitionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDeliveryMethodDefinitionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
