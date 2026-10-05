<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldRelationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldRelationConnection";

    public function selectEdges(ShopifyMetafieldRelationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldRelationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMetafieldRelationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldRelationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMetafieldRelationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
