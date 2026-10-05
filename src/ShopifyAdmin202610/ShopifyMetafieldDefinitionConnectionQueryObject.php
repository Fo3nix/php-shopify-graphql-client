<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldDefinitionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionConnection";

    public function selectEdges(ShopifyMetafieldDefinitionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMetafieldDefinitionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMetafieldDefinitionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
