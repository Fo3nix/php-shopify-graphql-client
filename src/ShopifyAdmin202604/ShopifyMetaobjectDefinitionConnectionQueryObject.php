<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectDefinitionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectDefinitionConnection";

    public function selectEdges(ShopifyMetaobjectDefinitionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectDefinitionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMetaobjectDefinitionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectDefinitionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMetaobjectDefinitionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
