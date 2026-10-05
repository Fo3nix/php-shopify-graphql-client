<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectConnection";

    public function selectEdges(ShopifyMetaobjectConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMetaobjectConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMetaobjectConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
